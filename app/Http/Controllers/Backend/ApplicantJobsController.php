<?php

namespace App\Http\Controllers\backend;

use App\Applicant;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class ApplicantJobsController extends Controller
{
    public function applicantJobs()
    {
        $user_jobs = array();
        $applicant_jobs = Applicant::with('jobs')->where('user_id', Auth::user()->id)->get();
        foreach ($applicant_jobs as $applicant_job) {
            foreach ($applicant_job->jobs as $jobs) {
                array_push($user_jobs, $jobs->pivot);
            }
        }

        return view('backend.applicant.applied-jobs', compact('user_jobs'));
    }
}
