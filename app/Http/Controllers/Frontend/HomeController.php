<?php

namespace App\Http\Controllers\Frontend;

use App\Applicant;
use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Auth;

class HomeController extends Controller
{

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

    public function applyJob($id)
    {
        $applicant_id = Applicant::where('user_id', Auth::user()->id)->first();
        if (empty($applicant_id->resume)){
            return redirect(route('update-profile'))->with('error', 'Before apply job, please upload resume.');
        }

        DB::table('applicant_job')->insert(
            [
                'applicant_id' => $applicant_id->id,
                'job_id' => $id
            ]
        );

        return redirect()->back()->with('success', 'Applied successfully');

    }
}
