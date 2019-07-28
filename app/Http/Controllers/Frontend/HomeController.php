<?php

namespace App\Http\Controllers\Frontend;

use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $jobs = Job::all();
        return view('frontend.index', compact('jobs'));
    }

    public function jobDetails($id)
    {
        $job = Job::where('id', $id)->first();
        return view('frontend.job-details', compact('job'));
    }
}
