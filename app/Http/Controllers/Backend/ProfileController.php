<?php

namespace App\Http\Controllers\Backend;

use App\Applicant;
use App\ApplicantSkill;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;
use File;
use Response;
use App\Skill;

class ProfileController extends Controller
{
    public function companyProfile()
    {
        $profile = User::where('id', Auth::user()->id)->with('company')->first();
        return view('backend.company.profile', compact('profile'));
    }

    public function applicantProfile()
    {
          $profile = User::leftJoin('applicants', 'users.id', 'applicants.user_id')
            ->select('users.*', 'applicants.*','applicants.id as applicant_id')->where('users.id', Auth::user()->id)->first();

        return view('backend.applicant.profile', compact('profile'));
    }

    public function updateProfile()
    {
        $applicant = User::with('applicant')->first();
        $applicant_skills = ApplicantSkill::where('user_id', Auth::user()->id)->pluck('skill_id')->toArray();
        $skills_lists = Skill::all();

        return view('backend.applicant.update-profile', compact('applicant', 'applicant_skills', 'skills_lists'));
    }

    public function storeUpdateProfile(Request $request)
    {
        $this->validate($request, [
           'resume' => 'required|mimes:pdf,doc',
           'skills' => 'required',
        ]);

        $applicant = Applicant::where('user_id', Auth::user()->id)->first();

        if (!empty($applicant->resume)){
            $resume = public_path("assets/img/resume/{$applicant->resume}");
            unlink($resume);
        }

        $file = $request->resume;
        $fileName = time() . '-' . $file->getClientOriginalName();
        $file->move(base_path('public/assets/img/resume/'), $fileName);

        $applicant->resume = $fileName;
        $applicant->save();

        $applicant_skills = ApplicantSkill::where('user_id', Auth::user()->id)->get();
        if (!empty($applicant_skills)){
            foreach ($applicant_skills as $applicant_skill){
                $applicant_skill->delete();
            }
        }

        foreach ($request->skills as $skill){
            $applicant_skill = new ApplicantSkill();
            $applicant_skill->user_id = Auth::user()->id;
            $applicant_skill->skill_id = $skill;
            $applicant_skill->save();
        }

        return redirect(route('applicant-profile'))->with('success', 'Resume Updated Successfully');
    }

    public function resumeDownload($id)
    {
        $applicant_resume = Applicant::findOrFail($id);
        $file = public_path(). "/assets/img/resume/".$applicant_resume->resume;

        $headers = array(
            'Content-Type: application/pdf',
        );
        return Response::download($file, 'resume.pdf', $headers);
    }
}
