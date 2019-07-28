@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Manage Jobs</h3>
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
                    <div class="job-alerts-item candidates">
                        <h3 class="alerts-title">Manage Jobs <a class="float-right" href="{{ route('jobs.create') }}">Post a Job</a></h3>
                        <div class="alerts-list">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <p>Job Title</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <p>Total Applicant</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <p>Options</p>
                                </div>
                            </div>
                        </div>
                        @foreach($jobs as $job)
                        <div class="alerts-content">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <h3>{{$job->job_title}}</h3>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <h3>{{ total_job_applicants($job->id) }}</h3>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <a href="{{ route('jobs.edit', $job->id) }}">Update</a> |
                                    <a href="{{ route('jobs.show', $job->id) }}">Show</a> |
                                    <a href="{{ route('jobs-applicant', $job->id) }}">Applicant</a>
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


