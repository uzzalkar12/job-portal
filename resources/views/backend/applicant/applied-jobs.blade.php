@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>My Applied Jobs</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="content">
        <div class="container">
            <div class="row">
                @include('backend.applicant.include.sidebar')
                <div class="col-lg-8 col-md-8 col-xs-12">
                    <div class="job-alerts-item candidates">
                        <h3 class="alerts-title">My Applied Jobs</h3>
                        <div class="alerts-list">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <p>Job Title</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <p>Company Name</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <p>Email</p>
                                </div>
                            </div>
                        </div>
                        @foreach($user_jobs as $user_job)
                            <div class="alerts-content">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-xs-12">
                                        <h3>{{ get_job_title($user_job->job_id) }}</h3>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12">
                                        <h3>{{ get_company_name($user_job->job_id) }}</h3>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <h3>{{ get_company_email($user_job->job_id) }}</h3>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



