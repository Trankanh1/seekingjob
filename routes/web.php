<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use Illuminate\Support\Facades\Route;

Route::group(['middleware' => ['web']], function () {
    Route::get('/', 'HomeController@index')->name('web');

    Route::post('/user/login', 'UserController@login')->name('user-login');
    Route::post('/user/signup', 'UserController@signUp')->name('user-signup');
    Route::post('/guest/sign-in', 'HomeController@index');

    Route::group(["middleware" => "appuser"], function () {
        Route::get('/member/home', 'UserController@index')->name('member-home');
  
        Route::group(["prefix" => "/jobs"], function () {
            Route::post('/create', 'JobController@create')->name('post-job');
            Route::get('{jobId}/delete', 'JobController@delete')->name('delete-job');
            Route::get('/home', 'JobController@home')->name("job-home");
            Route::get('/index', 'JobController@index')->name("job-index");
            Route::post('{jobId}/update', 'JobController@update')->name('update-job');
            Route::post('/add-viewed', 'JobController@addViewedJob');
            Route::post('/apply', 'JobController@apply')->name("job-saved");
            Route::get('/saved', 'JobController@saved')->name("job-saved");
            Route::get('/applied', 'JobController@applied')->name("job-applied");
            Route::post('/add-saved', 'JobController@addSaved')->name("add-saved");
            Route::get('/search-result', 'JobController@get')->name("job-search-result");
        });

        Route::group(["prefix" => "/salaries"], function () {
            Route::get('/index', 'CompanyController@index')->name("salary-index");
            Route::get('/search-result', 'CompanyController@salaries')->name("salary-search-result");
        });

        Route::group(["prefix" => "/reviews"], function () {
            Route::get('/index', 'ReviewController@index')->name("review-index");
            Route::get('/search-result', 'ReviewController@get')->name("review-search-result");
        });

        Route::group(["prefix" => "/companies"], function () {
            Route::get('/index', 'CompanyController@index')->name("company-index");
            Route::get('/search-result', 'CompanyController@get')->name("company-search-result");
            Route::get('/{companyId}/review', 'CompanyController@review')->name("company-review");
            Route::post('/{companyId}/add-review', 'CompanyController@addReview')->name("company-add-review");
            Route::post ('/get', 'CompanyController@getById')->name("company-get-by-id");
            Route::get('/{companyId}/detail', 'CompanyController@show')->name('company-detail');
            Route::get('/{companyId}/reviews', 'CompanyController@show')->name('company-detail');
        
            Route::get('/{companyId}/interviews', 'CompanyController@interviews')->name("company-interview");
            Route::get('/{companyId}/jobs', 'CompanyController@jobs')->name("company-job");
            Route::get('/{companyId}/overview', 'CompanyController@overview')->name("company-overview");
            
        });

        Route::group(["prefix" => "/interviews"], function () {
            Route::get('/search-result', 'InterviewController@get')->name("interview-search-result");
            Route::get('/index', 'InterviewController@index')->name("interview-index");
            Route::get('{companyId}/add', 'InterviewController@add')->name("interviw-add");
            Route::post('/submit', 'InterviewController@submit')->name('add-interview');
        });
        
        Route::group(["middleware" => "employer"], function(){
            Route::get('/post-job', 'JobController@post')->name('post-job-view');
            Route::get('/employer/jobs', 'EmployerController@getJobs')->name('employer-list-job');
            Route::get('/employer/candicates', 'EmployerController@getCandicates')->name('employer-list-candicate');
            Route::get('/employer/dashboard', 'EmployerController@dashboard')->name('employer-dashboard');
            Route::get('/employer/reviews', 'EmployerController@getReviews')->name('employer-list-review');
            Route::get('/employer/profile', 'EmployerController@profile')->name('employer-profile');
            Route::post('/employer/update-profile', 'EmployerController@updateProfile')->name('employer-update-profile');
        });
       
    });
});
