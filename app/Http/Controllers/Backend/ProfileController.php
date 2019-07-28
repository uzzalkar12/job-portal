<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Auth;

class ProfileController extends Controller
{
    public function companyProfile()
    {
        $profile = User::where('id', Auth::user()->id)->with('company')->first();
        return view('backend.company.profile', compact('profile'));
    }

    public function applicantProfile()
    {
        $profile = User::where('id', Auth::user()->id)->with('company')->first();
        return view('backend.applicant.profile', compact('profile'));
    }
}
