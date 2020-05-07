<?php

namespace App\Http\Controllers;

use App\Models\ClientModel;
use App\Models\CompanyModel;
use App\Models\InterviewModel;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    public function index()
    {

        return view('interviews.index');
    }

    public function getJobs()
    {
    }

    public function add()
    {
        return view('interviews.add');
    }

    public function submit(Request $request)
    {
        $company = CompanyModel::where('name', $request->employer_name)->first();
  
        if (!$company) {
            abort("404");
        }


        $questions = [];
        $answers = $request->answers;
        for ($i = 0; $i < count($request->questions); $i++) {
            $questions[] = (object) [
                "question" => $request->questions[$i],
                "answer" => $answers[$i],
            ];
        }

        $interview = new InterviewModel();
        $interview->user_id = 1;
        $interview->employer_name = $request->employer_name;
        $interview->job_title = $request->job_title;
        $interview->interview_description = $request->interview_description;
        $interview->interview_difficulty = $request->interview_difficulty;
        $interview->process_exp = $request->process_experience;
        $interview->interview_place = $request->interview_place;
        $interview->interview_outcome = $request->interview_outcome;
        $interview->questions = \json_encode($questions);
        $interview->company_id = $company->id;
        $interview->since = time();

        $interview->save();

        if($company->data) {
            $company->data = json_decode($company->data);
            $company->data->interviews ++;
            $company->data = json_encode($company->data);
        } else{
            $company->data = json_encode((object)["interviews" => 1]);
        }

        return redirect(route("interview-search-result"));
    }

    public function get(Request $request)
    {
        $companies = CompanyModel::where("name","LIKE","%". $request->keyword."%")->get()->toArray();
        if (!$companies) {
            $query = InterviewModel::orderByDesc("id");

            $query->where('employer_name', $request->keyword);
            $query->orWhere('job_title', $request->keyword);
            $interviews = $query->get()->toArray();
            ClientModel::pageData('interviews', $interviews);
        } else {
            ClientModel::pageData("companies", $companies);
        }

        $params = [
            "type" => $request->type,
            "location" => $request->location,
            "keyword" => $request->keyword,
        ];

        ClientModel::pageData('params', $params);

        return view('interviews.interview');
    }

    public function jobIndex()
    {
        return view('jobs.index');
    }
}
