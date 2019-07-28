<?php

namespace App\Http\Controllers\Backend;

use App\Job;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\DB;

class JobsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jobs = Job::orderBy('created_at')->get();
        return view('backend.company.jobs.list', compact('jobs'))->with('sl', 1);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.company.jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'job_title' => 'required|max:192|string',
            'job_description' => 'required|string',
            'salary' => 'required|numeric',
            'location' => 'required|max:192|string',
            'country' => 'required|max:192|string',
        ]);

        $job = new Job();
        $job->user_id = Auth::id();
        $job->job_title = $request->job_title;
        $job->job_description = $request->job_description;
        $job->salary = $request->salary;
        $job->location = $request->location;
        $job->country = $request->country;
        $job->save();

        return redirect('jobs')->with('success', ('Information has been added successfully'));
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $job = Job::findOrFail($id);
        return view('backend.company.jobs.show', compact('job'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $job = Job::findOrFail($id);
        return view('backend.company.jobs.edit', compact('job'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'job_title' => 'required|max:192|string',
            'job_description' => 'required|string',
            'salary' => 'required|numeric',
            'location' => 'required|max:192|string',
            'country' => 'required|max:192|string',
        ]);

        $job = Job::find($id);
        $job->job_title = $request->job_title;
        $job->job_description = $request->job_description;
        $job->salary = $request->salary;
        $job->location = $request->location;
        $job->country = $request->country;
        $job->save();

        return redirect('jobs')->with('success', ('Information has been updated successfully'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function jobApplicant($id = null)
    {
        if ($id) {
            $job_applicants = DB::table('applicant_job')->where('job_id', $id)->get();
            return view('backend.company.jobs-applied.job-applicant-list', compact('job_applicants'));
        }
        $applicants = Job::where('user_id', Auth::user()->id)->with('applicants')->get();
        $job_applicants = array();
        foreach ($applicants as $applicant) {
            foreach ($applicant->applicants as $total_applicant) {
                array_push($job_applicants, $total_applicant->pivot);
            }
        }

        return view('backend.company.jobs-applied.job-applicant-list', compact('job_applicants'));
    }
}
