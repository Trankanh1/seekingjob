<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobModel;
use App\Repositories\JobRepository;
use App\Repositories\Interfaces\RepositoryInterface;

use \App\Http\Requests\StoreJob;
use App\Models\ClientModel;
use App\Models\CompanyModel;
use App\Models\SearchModel;
use Illuminate\Support\Facades\DB;
class ReviewController extends Controller
{
    protected $review;

    function __construct(RepositoryInterface $review)
    {
        $this->review = $review;
    }

    public function index()
    {
        return view('reviews.index');
    }

    public function all()
    {
        // DB::enableQueryLog(); // Enable query log
        // dd(DB::getQueryLog()); // Show results of log
        
        $jobs = $this->job->all();
       return view('jobs.index', $jobs);
        
    }

    public function get(Request $request)
    {   
        $query = CompanyModel::orderByDesc("id");
        $search = new SearchModel();
        $flag = false;
        $param_search = (object) [];

        if ($request->keyword) {
            $query->where('name', "LIKE", "%".$request->keyword ."%");

            $flag = true;
        }

        if ($request->location) {
            $query->where('head_quarter', "LIKE",   "%".$request->location. "%");

            $flag = true;
        }

        $companies = $query->get();
        $params = [
            "type" => $request->type,
            "location" => $request->location,
            "keyword" => $request->keyword,
        ];
    
        if($companies) {
         
            $company_ids = $companies->pluck("id")->toArray();
            $companies = $companies->toArray();
          
            ClientModel::pageData('companies', $companies);
            $jobs = JobModel::whereIn("company_id", $company_ids)->get();
            if($jobs) {
                $jobs= $jobs->toArray();
                ClientModel::pageData("recommeneds", $jobs);
            }
        }
    
      
        ClientModel::pageData('params', $params);

        if ($flag) {
            $param_search->location = $request->location;
            $param_search->keyword = $request->keyword;
            $search->user_id = session(["user"])["id"];
            $search->query = json_encode($param_search);
            $search->save();
        }

        return view('reviews.review');
    }

    /**
     * @desc Create a new job
     */
    public function create(StoreJob $request)
    {
        $this->model->create($request);
    }

}
