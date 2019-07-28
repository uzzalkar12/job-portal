<?php

namespace App\Http\Controllers\Frontend;

use App\Applicant;
use App\Company;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function applicantRegistration()
    {
        return view('auth.registration.applicant-registration');
    }

    public function companyRegistration()
    {
        return view('auth.registration.company-registration');
    }

    public function applicantRegistrationStore(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password =  Hash::make($request->password);
        $user->user_type =  'Applicant';
        $user->save();

        $applicant = new Applicant();
        $user->company()->save($applicant);

        if ($user){
            return redirect(route('login'))->with('success', 'Registration completed successfully');
        }
        return redirect()->back()->with('error', 'Please try again');
    }

    public function companyRegistrationStore(Request $request)
    {
        $this->validate($request, [
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'business_name' => 'required|string|max:255',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->user_type = 'Company';
        $user->save();

        $company = new Company();
        $company->business_name = $request->business_name;
        $user->company()->save($company);

        if ($user){
            return redirect(route('login'))->with('success', 'Registration completed successfully');
        }
        return redirect()->back()->with('error', 'Please try again');
    }
}
