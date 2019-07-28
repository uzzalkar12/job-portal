@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Applicants</h3>
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
                        <h3 class="alerts-title">Applicants</h3>
                        <div class="alerts-list">
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-xs-12">
                                    <p>Name</p>
                                </div>
                                <div class="col-lg-4 col-md-4 col-xs-12">
                                    <p>Email</p>
                                </div>
                                <div class="col-lg-3 col-md-3 col-xs-12">
                                    <p>Resume</p>
                                </div>
                            </div>
                        </div>
                        @foreach($job_applicants as $job_applicant)
                            <div class="alerts-content">
                                <div class="row">
                                    <div class="col-lg-5 col-md-5 col-xs-12">
                                        <h3>{{ get_applicant_name($job_applicant->applicant_id) }}</h3>
                                    </div>
                                    <div class="col-lg-4 col-md-4 col-xs-12">
                                        <h3>{{ get_applicant_email($job_applicant->applicant_id) }}</h3>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-xs-12">
                                        <h3>Download</h3>
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


