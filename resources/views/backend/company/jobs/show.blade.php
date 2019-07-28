@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Job Details</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                @include('backend.company.include.sidebar')
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="content-area">
                        <p class="mb-2" style="font-size: 20px; font-weight: bold;color: black">Job Title</p>
                        <p>{{ $job->job_title }}</p>

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Job Description</p>
                        <p>{{ $job->job_description}}</p>

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Location</p>
                        <p>{{ $job->location }}</p>

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Salary</p>
                        <p>{{ $job->salary }}</p>

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Country</p>
                        <p>{{ $job->country }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


