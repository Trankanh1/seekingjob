<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use \App\Http\Servives\UserService;
use App\Models\ClientModel;
use App\Models\JobModel;
use App\Models\SearchModel;
use App\Models\UserModel;
use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Hash;
use \Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    protected $_userService = null;

    function __construct()
    {
    }

    public function index(Request $request)
    {
        $user = UserModel::find(1);
        if (!$user)
            return route("web");

        $recommenedJobs = JobModel::where("title", "LIKE", $user->title)->get();
        if ($recommenedJobs) {
            $searches = SearchModel::where("user_id", 1)->orderBy("id", "desc")->get()->toArray();
            $searchResults = [];
            $recommenedJobs = $recommenedJobs->toArray();
            foreach ($searches as $search) {
                $query = json_decode($search["query"]);
                if ($query->location && $query->location != "null") {
                    $search["count"] = count(JobModel::where("location", "LIKE", "%" . $query->location . "%")->get());
                    $searchResults[] = $search;
                }
            }
        }
   
        ClientModel::pageData("recommened_jobs", $recommenedJobs);
        ClientModel::pageData("recentSearches", $searchResults);
        
        return view('member.index');
    }

    public function login(LoginRequest $request)
    {
        $input = $request->all();
  
        $user = \App\Models\UserModel::where([
            ['email', '=', $input['username']],
            ['password', '=', md5($input['password'])]
        ])->first();

        if (!$user) {
            return response()->json([
                'code' => 0,
                'message' => 'Username or password does\'nt match'
            ]);
        }

      session(["user" => $user->toArray()]);
        
        return response()->json([
            'code' => 1,
            'message' => 'Login successfully',
        ]);
    }

    public function signUp(CreateUserRequest $request)
    {
        if ($request->password != $request->confirm_password) {
            return response()->json([
                'code' => 0,
                'message' => 'Confirm password does\'nt match'
            ]);
        }

        $input = $request->all();
        $user = \App\Models\UserModel::where([
            ['email', '=', $input['username']],
        ])->first();

        if ($user) {
            return response()->json([
                'code' => 0,
                'message' => 'Email already taken'
            ]);
        }

        $user = new UserModel();
        $user->email = $request->email;
        $user->password = md5($request->password);
        if (!$user->save()) {
            return response()->json([
                'code' => 0,
                'messages' => 'Create failed'
            ]);
        }

        return response()->json([
            'code' => 1,
            'message' => 'Signed successfully'
        ]);
    }
}
