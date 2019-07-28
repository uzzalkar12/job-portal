@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-6 col-xs-12">
                    <div class="breadcrumb-wrapper">
                        <div class="img-wrapper">
                            <img src="{{ asset('assets/img/about/company-logo.png') }}" alt="">
                        </div>
                        <div class="content">
                            <h3 class="product-title">{{ $job->job_title }}</h3>
                            <p class="brand">{{ $job->user->company->business_name }}</p>
                            <div class="tags">
                                <span><i class="lni-map-marker"></i> {{ $job->location }}</span>
                                <span><i class="lni-calendar"></i> Posted 26 June, 2020</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="month-price">
                        <span class="year">Monthly</span>
                        <div class="price">{{ $job->salary }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="job-detail section">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-8 col-md-12 col-xs-12">
                    <div class="content-area">
                        <h4>Job Description</h4>
                        <p>{{ $job->job_description }}</p>

                        <h4 style="margin-bottom: 10px !important;">Country</h4>
                        <p>{{ $job->country }}</p>

                        @if(check_user_type() == true)
                            @if(applied_job($job->id) == true)
                                <p style="color: red; font-size: 18px">Already applied this job</p>
                             @else
                                <form action="{{ route('apply-job',$job->id) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-common">Apply job</button>
                                </form>
                             @endif
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection


