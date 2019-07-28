@extends('layouts.app')
@section('content')
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner-header">
                        <h3>Update Profile</h3>
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
                        <h3 class="job-title">Update Resume</h3>
                        <form class="form-ad" method="POST" action="{{ route('update-profile') }}" enctype="multipart/form-data" >
                            @csrf

                            <div class="form-group">
                                <label class="control-label">Resume</label>
                                <select name="skills[]" multiple id="skills" class="form-control{{ $errors->has('skills') ? 'invalid' : '' }}">
                                    <option value="">Select Skill</option>
                                    @for($i = 0; $i< count($skills_lists); $i++)
                                        <option @if(in_array($skills_lists[$i]->id, $applicant_skills) ) selected @endif value="{{$skills_lists[$i]->id}}">{{$skills_lists[$i]->skill_name}} </option>
                                    @endfor
                                </select>
                                @error('skills')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <label class="control-label">Resume</label>
                                <input type="file" class="form-control @error('resume') is-invalid @enderror" name="resume"  required>
                                @error('resume')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-common">Update Profile</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection



