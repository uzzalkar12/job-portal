@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Profile Details</h3>
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
                    <div class="content-area">
                        <p class="mb-2" style="font-size: 20px; font-weight: bold;color: black">Name</p>
                        <p>{{ $profile->first_name . ' ' . $profile->last_name }}</p>

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Company Name</p>
                        <p>{{ $profile->company->business_name }}</p>

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Email</p>
                        <p>{{ $profile->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



