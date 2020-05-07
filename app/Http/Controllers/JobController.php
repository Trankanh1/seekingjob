<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobModel;
use App\Models\CompanyModel;
use App\Repositories\Interfaces\RepositoryInterface;
use \App\Http\Requests\StoreJob;
use App\Models\ApplicationModel;
use App\Models\ClientModel;
use App\Models\SearchModel;
use DateTime;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpKernel\Client;

class JobController extends Controller
{
    protected $job;

    function __construct(RepositoryInterface $job)
    {
        $this->job = $job;
    }

    public function index()
    {
        return view('jobs.index');
    }

    public function home()
    {
        $searches = SearchModel::where("user_id", session("user")["id"])->orderBy("id", "desc")->take(6)->get();

        $viewed = ViewdedModel::where('user_id',  session("user")["id"])->select('job_ids')->orderBy("id", "desc")->first();
        $job_ids = [];
        if ($viewed) {
            $job_ids = $viewed->job_ids;
            $viewedJobs = JobModel::whereIn("id", json_decode($job_ids))->get();

            if ($viewedJobs) {
                $viewedJobs = $viewedJobs->toArray();
            }

            ClientModel::pageData("recentVieweds", $viewedJobs);
        }

        if ($searches) {
            $searches = $searches->toArray();
        }

        ClientModel::pageData('recentSearches', $searches);

        return view('jobs.home');
    }

    public function all()
    {
        $jobs = $this->job->all();
        return view('jobs.index', $jobs);
    }

    public function get(Request $request)

    {
        $job = JobModel::find($request->job_id);
        $query = JobModel::orderByDesc("id");
        $search = new SearchModel();
        $flag = false;
        $param_search = (object) [];

        if ($request->keyword) {
            $query->where('company_name', "LIKE", "%" . $request->keyword . "%")
                ->orWhere('title', $request->keyword);

            $flag = true;
        }

        if ($request->location) {
            $query->where('location', "LIKE",  "%" . $request->location . "%");

            $flag = true;
        }

        if ($request->since) {
            $time = time() - 86400 * (int) $request->since;
            $query->where('since', '>=', $time);
        }

        if ($flag) {
            $param_search->location = $request->location;
            $param_search->keyword = $request->keyword;
            $search->user_id = 1;
            $search->query = json_encode($param_search);
            $search->save();
        }

        $jobs = $query->get()->toArray();
        $params = [
            "type" => $request->type,
            "location" => $request->location,
            "keyword" => $request->keyword,
        ];

        if (!$job && $jobs) {
            $job = $jobs[0];
        }

        ClientModel::pageData('jobs', $jobs);
        ClientModel::pageData('params', $params);
        ClientModel::pageData("job", $job);

        if (!$jobs) {
            return view('jobs.nofound');
        }

        return view('jobs.job')->with("job", $job);
    }

    public function saved(Request $request)
    {
        $userSaved = SavedModel::where("user_id", 1)->first();
        $saved_ids = $userSaved->job_ids;

        $jobs = JobModel::whereIn("id", json_decode($saved_ids))->get()->toArray();

        ClientModel::pageData('jobs', $jobs);

        return view('jobs.saved');
    }

    /**
     * @desc Create a new job
     */
    public function create(Request $request)
    {

        $job  = new JobModel();
        $company = CompanyModel::where('name', str_replace(' ', '', $request->company_name))->first();
        if ($company) {
            $job->company_id = $company->id;
            $job->company_name = $company->company_name;
        } else {
            $job->company_name = $request->company_name;
        }
        if ($request->expire_time) {
            $date = new DateTime();
            $expire_time = $date->modify("+$request->expire_time day")->format('U');
            $job->expire_time = $expire_time;
        }

        if ($company->data) {
            $company->data = json_decode($company->data);
            $company->data->jobs++;
            $company->data = json_encode($company->data);
        } else {
            $company->data = json_encode((object) ["jobs" => 1]);
        }

        $company->update();

        $job->title = $request->title;
        $job->description = $request->description;
        $job->location = $request->location;
        $job->user_id = 1;
        $job->since = time();

        $job->salary = $request->salary;
        $job->save();

        return redirect(route("employer-list-job"));
    }

    public function post()
    {
        return view('jobs.post');
    }

    public function addViewedJob(Request $request)
    {
        $viewer = ViewdedModel::where('user_id', session("user")["id"])->first();

        if (!$viewer) {
            $viewer = new ViewdedModel();
            $viewer->user_id = 1;
            $viewer->job_ids = json_encode([$request->job_id]);
            $viewer->since = time();
            $viewer->save();
        } else {
            $job_ids = json_decode($viewer->job_ids);
            if (!in_array($request->job_id, $job_ids)) {
                $job_ids[] = (int) $request->job_id;
                $viewer->job_ids = json_encode($job_ids);
                $viewer->save();
            }
        }

        return response()->json([
            'code' => 1,
            'message' => 'Added successfully'
        ]);
    }

    public function addSaved(Request $request)
    {
        $viewerSaved = SavedModel::where('user_id', session("user")["id"])->first();


        if (!$viewerSaved) {
            $viewerSaved = new SavedModel();
            $viewerSaved->user_id = 1;
            $viewerSaved->job_ids = json_encode([$request->job_id]);
            $viewerSaved->save();
        } else {
            $job_ids = json_decode($viewerSaved->job_ids);
            if (!in_array($request->job_id, $job_ids)) {
                $job_ids[] = (int) $request->job_id;
                $viewerSaved->job_ids = json_encode($job_ids);
                $viewerSaved->save();
            }
        }

        return response()->json([
            'code' => 1,
            'message' => 'Saved successfully'
        ]);
    }

    public function apply(Request $request)
    {
        $data = $request->all();
        $job = JobModel::find($data["job_id"]);
        if (!$job)
            abort("404");

        $application = new ApplicationModel();
        $application->fullname = $data["fullname"];
        $application->address = $data["address"];
        $application->phone = $data["phone"];
        $application->email = $data["email"];
        $application->job_id = $data["job_id"];
        $application->company_id = $job->company_id;
        $application->job_export = json_encode((object) [
            "title" => $job->title,
            "location" => $job->location,
            "company_name" => $job->company_name,
        ]);
        $application->since = time();
        $application->file = Storage::url(Storage::disk('public')->put("cvs", $data["cv"]));
        $application->user_id = session("user")["id"];
        $application->save();

        return redirect(route("job-applied"));
    }

    function update(Request $request)
    {
        $job = JobModel::find($request->jobId);
        if (!$job)
            abort("404");
        $data = $request->all();
        $job->update($data);

        return redirect(route("employer-list-job"));
    }

    function delete(Request $request)
    {
        $job = JobModel::find($request->jobId);
        if (!$job)
            abort("404");
        $job->delete();

        return redirect(route("employer-list-job"));
    }

    public function applied(Request $request){
        $applications = ApplicationModel::where("user_id", session("user")["id"])->orderBy("id", "desc")->get();
        
        if ($applications) {
            $applications = $applications->toArray();
            ClientModel::pageData("applications", $applications);
        }
  
        return view("jobs.application");
    }
}

class ViewdedModel extends Model
{
    protected $table = "vieweds";
    public $timestamps = false;
}

class SavedModel extends Model
{
    protected $table = "saveds";
    public $timestamps = false;
}
