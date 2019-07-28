<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class DashboardController extends Controller
{

    public function index()
    {
        $method = Auth::User()->user_type . '_dashboard';
        return $this->$method();
    }


    private function Applicant_dashboard()
    {
        return view('backend.dashboard.' . Auth::User()->user_type);
    }

    private function Company_dashboard()
    {
        return view('backend.dashboard.' . Auth::User()->user_type);
    }
}
