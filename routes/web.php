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


use App\Applicant;
use App\Job;
use App\User;

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace' => 'Frontend'], function () {
    Route::get('/', 'HomeController@index')->name('/');

    Route::get('/applicant-register', 'RegisterController@applicantRegistration')->name('applicant-register');
    Route::get('/company-register', 'RegisterController@companyRegistration')->name('company-register');

    Route::post('/applicant-register', 'RegisterController@applicantRegistrationStore')->name('applicant-register');
    Route::post('/company-register', 'RegisterController@companyRegistrationStore')->name('company-register');

   Route::get('job-details/{id}', 'HomeController@jobDetails')->name('job-details');
});

Route::group(['namespace' => 'Backend', 'middleware' => 'auth'], function () {
    Route::get('dashboard', 'DashboardController@index')->name('dashboard');

    //Company route
    Route::resource('jobs', 'JobsController', ['except' => ['destroy']]);
    Route::get('jobs-applicant/{id?}', 'JobsController@jobApplicant')->name('jobs-applicant');
    Route::get('company-profile', 'ProfileController@companyProfile')->name('company-profile');
    // Applicant route
    Route::get('applicant-profile', 'ProfileController@applicantProfile')->name('applicant-profile');
    Route::get('applicant-jobs', 'ApplicantJobsController@applicantJobs')->name('applicant-jobs');
});

Route::get('/dd', function ($job_id  = 1) {
    $job = Job::where('id', $job_id)->first();
    return $job->job_title;
});

Route::get('/logout', function () {
   Auth::logout();
});
