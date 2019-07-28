@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Post a Job</h3>
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
                    <div class="post-job box">
                        <h3 class="job-title">Update Job</h3>
                        <form class="form-ad" method="POST" action="{{ route('jobs.update', $job->id) }}">
                            @csrf
                            {{ method_field('PATCH') }}
                            <div class="form-group">
                                <label class="control-label">Job Title</label>
                                <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{ $job->job_title }}" required>
                                @error('job_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" name="job_description">Description</label>
                                <textarea name="job_description" class="form-control @error('job_description') is-invalid @enderror" required>{{ $job->job_description }}</textarea>
                                @error('job_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ $job->location }}"  required>
                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Salary</label>
                                <input type="number" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ $job->salary }}" required>
                                @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Country</label>
                                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ $job->country }}"  required>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-common">Update your job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



