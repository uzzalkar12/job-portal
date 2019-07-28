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

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Email</p>
                        <p>{{ $profile->email }}</p>

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Skills</p>
                        <p>
                            @foreach(get_applicant_skill() as $applicant_skill)
                                {{ get_skill_name($applicant_skill->id) }}
                            @endforeach
                        </p>

                        <p class="mb-2 mt-3" style="font-size: 20px; font-weight: bold;color: black">Resume</p>
                        <p> <a href="{{ route('resume-download', $profile->applicant_id) }}">Download Resume</a></p>

                        <p class="mt-4"><a href="{{ route('update-profile') }}" class="btn btn-common">Update Profile</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



