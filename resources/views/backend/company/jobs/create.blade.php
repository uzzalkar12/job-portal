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
                        <h3 class="job-title">Post a new Job</h3>
                        <form class="form-ad" method="POST" action="{{ route('jobs.store') }}">
                            @csrf
                            <div class="form-group">
                                <label class="control-label">Job Title</label>
                                <input type="text" class="form-control @error('job_title') is-invalid @enderror" name="job_title" value="{{ old('job_title') }}" required>
                                @error('job_title')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label" name="job_description">Description</label>
                                <textarea name="job_description" class="form-control @error('job_description') is-invalid @enderror" required>{{ old('job_description') }}</textarea>
                                @error('job_description')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Location</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror" name="location" value="{{ old('location') }}"  required>
                                @error('location')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Salary</label>
                                <input type="number" class="form-control @error('salary') is-invalid @enderror" name="salary" value="{{ old('salary') }}" required>
                                @error('salary')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label class="control-label">Country</label>
                                <input type="text" class="form-control @error('country') is-invalid @enderror" name="country" value="{{ old('country') }}"  required>
                                @error('country')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-common">Submit your job</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



