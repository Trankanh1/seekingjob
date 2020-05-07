<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobModel;
use App\Repositories\JobRepository;
use App\Repositories\Interfaces\RepositoryInterface;

use \App\Http\Requests\StoreJob;
use App\Models\ClientModel;
use App\Models\CompanyModel;
use App\Models\InterviewModel;
use App\Models\ReviewModel;
use Illuminate\Support\Facades\DB;
class CompanyController extends Controller
{
    protected $company;

    function __construct(RepositoryInterface $company)
    {
        $this->company = $company;
    }

    public function index()
    {
        return view('companies.index');
    }

    public function salaries()
    {
        // DB::enableQueryLog(); // Enable query log
        // dd(DB::getQueryLog()); // Show results of log
        
   //     $companies = $this->company->all();
       return view('salaries.index');
        
    }

    public function interviews (Request $request){
        $company = CompanyModel::find($request->companyId);
        $interviews = InterviewModel::where("company_id", $request->companyId)->get()->toArray();

        ClientModel::pageData("company", $company->toArray());
        ClientModel::pageData("interviews", $interviews);

        return view('companies.interview')->with("company", $company);
    }

    /**
     * @desc Create a new job
     */
    public function create(StoreJob $request)
    {
        $this->model->create($request);
    }

    public function show(Request $request)
    {   $company = CompanyModel::find($request->companyId);

        $reviews = ReviewModel::where("company_id", $request->companyId)->orderBy("id", "desc")->get();
        if($reviews) {
            $reviews = $reviews->toArray();
           
            ClientModel::pageData("reviews", $reviews);
        }

       ClientModel::pageData("company", $company->toArray());
        return view('companies.detail')->with("company", $company);
    }

    public function get(){
        return view ("");
    }

    public function review(Request $request){
        $company = CompanyModel::find($request->companyId);

        return view("companies.rate")->with("company", $company);
    }

    public function addReview(Request $request){
        $company = CompanyModel::find($request->companyId);
        if(!$company) 
            abort("404");

        $data = $request->all();

        $review = new ReviewModel();
        $review->company_id = $data["company_id"];
        $review->company_name = $data["company_name"];
        $review->rate = $data["rate"];
        $review->pros = $data["pros"];
        $review->cons = $data["cons"];
        $review->job_title = $data["job_title"];
        $review->since = time();
        $review->headline = $data["headline"];
        $review->save();
        if($company->data) {
            $company->data = json_decode($company->data);
            $company->data->reviews ++;
            $company->data = json_encode($company->data);
        } else{
            $company->data = json_encode((object)["reviews" => 1]);
        }
        $company->update();

        return redirect(route('company-detail', $company->id));
    }

    public function getById(Request $request){
        $company = CompanyModel::find($request->company_id);
        
        if(!$company) 
            abort("404");


        $reviews = ReviewModel::where("company_id", $company->id)->orderBy("id", "desc")->get();

        if ($reviews) {
            $reviews = $reviews->toArray();

            ClientModel::pageData("reviews", $reviews);
        }
        
        return response()->json([
                'code' => 1,
                'message' => 'Successfully',
                'company' => json_encode($company->toArray()),
                'reviews' => json_encode($reviews),
            ]);
    }


    public function jobs(Request $request){
        $company = CompanyModel::find($request->companyId);
       
        if(!$company) 
            abort("404");

        $jobs = JobModel::where("company_id", $company->id)->get();

        if($jobs)
            $jobs= $jobs->toArray();
       
        ClientModel::pageData("jobs", $jobs);
        ClientModel::pageData("company", $company->toArray());
            
        return view("companies.job")->with("company",$company);
    }

    public function overview(Request $request){
        $company = CompanyModel::find($request->companyId);
        
        if(!$company) 
            abort("404");
            ClientModel::pageData("company", $company->toArray());

        return view("companies.overview")->with("company",$company);
    }

}
