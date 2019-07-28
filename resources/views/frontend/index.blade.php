@extends('layouts.app')
@section('content')
    <div class="hero-area container">
        <div class="row space-100">
            <div class="col-lg-7 col-md-12 col-xs-12">
                <div class="contents">
                    <h2 class="head-title">Find the <br> job that fits your life</h2>
                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non.</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-xs-12">
                <div class="intro-img">
                    <img src="assets/img/intro.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <section id="featured" class="section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Featured Jobs</h2>
                <p>Hand-picked jobs featured depending on popularity and benifits</p>
            </div>
            <div class="row">
                @foreach($jobs as $job)
                <div class="col-lg-4 col-md-6 col-xs-12">
                    <div class="job-featured">
                        <div class="icon">
                            <img src="assets/img/features/img1.png" alt="">
                        </div>
                        <div class="content">
                            <h3><a href="{{ route('job-details', $job->id) }}">{{ $job->job_title }}</a></h3>
                            <p class="brand">{{ get_company_business_name($job->user_id) }}</p>
                            <div class="tags">
                                <span><i class="lni-map-marker"></i> {{ $job->location }}</span>
                                <span><i class="lni-user"></i>{{ get_company_name($job->user_id) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
