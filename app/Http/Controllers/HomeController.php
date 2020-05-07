<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        return view('web.index');
	}

	public function getJobs()
	{

	}

	public function jobIndex()
	{
		return view('jobs.index');
	}
	
}
