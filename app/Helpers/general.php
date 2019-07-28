<?php

use Illuminate\Support\Facades\DB;
use App\Applicant;
use App\Job;
use App\User;
use App\Company;
use App\ApplicantSkill;
use App\Skill;

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
    function get_company_name($job_id)
    {
        $company = Job::leftJoin('companies', 'jobs.user_id', 'companies.user_id')
                ->where('jobs.id', $job_id)->select('companies.business_name')->first();
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

if (!function_exists('applied_job')) {
    function applied_job($job_id)
    {
        if (Auth::check())
        {
            $applicant = Applicant::where('user_id', Auth::user()->id)->first();
            $existsApplicant = DB::table('applicant_job')->where('applicant_id', $applicant->id)->where('job_id', $job_id)->first();
            if ($existsApplicant)
            {
                return true;
            }
            return false;
        }
        return false;

    }
}

if (!function_exists('check_user_type')) {
    function check_user_type()
    {
        if (Auth::check())
        {
            $company = User::where('id', Auth::user()->id)->where('user_type', 'Company')->first();
            if ($company)
            {
                return false;
            }
            return true;
        }
        return true;

    }
}

if (!function_exists('get_applicant_skill')) {
    function get_applicant_skill()
    {
        $applicant_skills = ApplicantSkill::leftJoin('skills', 'applicant_skills.skill_id', 'skills.id')->where('applicant_skills.user_id', Auth::user()->id)->select('skills.id')->get();
        if ($applicant_skills){
            return $applicant_skills;
        }
        return '';

    }
}

if (!function_exists('get_skill_name')) {
    function get_skill_name($skill_id)
    {
        $skill = Skill::where('id', $skill_id)->first();
        if ($skill){
            return $skill->skill_name .', ';
        }
        return '';

    }
}
