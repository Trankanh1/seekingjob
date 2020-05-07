<?php

namespace App\Http\Controllers;

use App\Models\ApplicationModel;
use App\Models\ClientModel;
use App\Models\CompanyModel;
use App\Models\JobModel;
use App\Models\ReviewModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class EmployerController extends Controller
{
    public function index()
    {
        $jobs = JobModel::where("user_id", 1)->get()->toArray();
        ClientModel::pageData("jobs", $jobs);
        return view('employer.job');
    }

    public function dashboard()
    {
        $data = [];
        $company = CompanyModel::where("user_id", session("user")["id"])->first();
        $postedJob = JobModel::where("user_id", session("user")["id"])->get();
        $totalPostedJobIds = $postedJob->pluck("id");
        $totalPostedJob = $postedJob->count();
        $totalReview = ReviewModel::where("company_id",$company->id)->get()->count();
        $totalCandiate = ApplicationModel::whereIn("job_id", $totalPostedJobIds)->get()->count();;
        $data["total_job"] = $totalPostedJob;
        $data["total_review"] = $totalReview;
        $data["total_candicate"] = $totalCandiate;
  
        return view('employer.dashboard')->with("data", $data);
    }

    public function getJobs(Request $request)
    {
        $jobs = JobModel::where("user_id", session("user")["id"])->orderBy("id", "desc")->get()->toArray();

        ClientModel::pageData("jobs", $jobs);

        return view('employer.job');
    }

    public function jobIndex()
    {

        return view('jobs.index');
    }

    public function getCandicates(Request $request)
    {
        $job_ids = JobModel::where("user_id", session("user")["id"])->get()->pluck("id")->toArray();
        $candicates = ApplicationModel::whereIn("job_id", $job_ids)->orderBy("id", "desc")->get()->toArray();

        ClientModel::pageData("candicates", $candicates);

        return view('employer.candicate');
    }

    public function getReviews()
    {
        $companies =  CompanyModel::where("user_id", session("user")["id"])->get();
        if ($companies) {
            $company_ids = $companies->pluck("id")->toArray();
            $reviews = ReviewModel::whereIn("company_id", $company_ids)->orderBy("id", "desc")->get();

            if ($reviews) {
                $reviews = $reviews->toArray();

                ClientModel::pageData("reviews", $reviews);
            }
        }


        return view('employer.review');
    }

    public function profile(){
        $company = CompanyModel::where("user_id", session("user")["id"])->first();
        if(!$company)
            abort("404");

        ClientModel::pageData("company", $company->toArray());

        return view("employer.profile")->with("company", $company);
    }

    public function updateProfile(Request $request){
        $company = CompanyModel::find(1);
        if(!$company) {
            abort("404");
        }
    
        $company->name = $request->name;
        $company->head_quarter = $request->head_quarter;
        $company->found = $request->found;
        $company->industry = $request->industry;
        $company->size = $request->size;
        $company->description = $request->description;
        if($request->file("logo")) {
            $company->logo =  Storage::url(Storage::disk('public')->put("cvs", $request->file("logo")));
        }
       
        $company->save();

        return redirect(route("employer-profile"));
    }
}
