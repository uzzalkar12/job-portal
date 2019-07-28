<?php

use Illuminate\Support\Facades\DB;
use App\Applicant;
use App\Job;
use App\User;
use App\Company;

if (!function_exists('total_job_applicants')) {
    function total_job_applicants($id)
    {
        $total = DB::table('applicant_job')->where('job_id', $id)->count();
        return $total;
    }
}

if (!function_exists('get_applicant_name')) {
    function get_applicant_name($applicant_id)
    {
        $applicant_name = Applicant::where('id', $applicant_id)->with('user')->first();
        return $applicant_name->user->first_name . ' ' .$applicant_name->user->last_name;
    }
}

if (!function_exists('get_applicant_email')) {
    function get_applicant_email($applicant_id)
    {
        $applicant_name = Applicant::where('id', $applicant_id)->with('user')->first();
        return $applicant_name->user->email;
    }
}

if (!function_exists('get_job_title')) {
    function get_job_title($job_id)
    {
        $job = Job::where('id', $job_id)->first();
        return $job->job_title;
    }
}

if (!function_exists('get_company_email')) {
    function get_company_email($job_id)
    {
        $company = Job::where('id', $job_id)->with('user')->first();
        return $company->user->email;
    }
}

if (!function_exists('get_company_business_name')) {
    function get_company_business_name($user_id)
    {
        $company = Company::where('user_id', $user_id)->first();
        return $company->business_name;
    }
}

if (!function_exists('get_company_name')) {
    function get_company_name($user_id)
    {
        $company = User::where('id', $user_id)->first();
        return $company->first_name . ' ' . $company->last_name;
    }
}
