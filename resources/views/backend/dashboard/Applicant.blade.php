@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Job Portal</h3>
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
                    <h4>Welcome {{ Auth::user()->first_name }}</h4>
                </div>
            </div>
        </div>
    </div>
@endsection

