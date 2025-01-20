@extends('layouts.admin.app')

@push('js')
@endpush
@push('css')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="col-md-6">
                    <form class="card" action="{{ route('course.update') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Edit Course</h3>
                            <div class="row row-cards">

                                <div class="form-row col-12">
                                    <div class="form-group col">Course Name</div>
                                    <input type="text" class="form-control" name="course_name" placeholder="Course Name"
                                        value="{{ $course_details->course_name }}">
                                    <input type="hidden" name="id" value="{{ $course_details->id }}">
                                    @error('course_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Select Course Duration</div>
                                    <select class="form-select" name="course_duration">
                                        <option value="">Select Course Duration</option>
                                        <option value="2" @if ($course_details->course_duration == 2) selected @endif>2 Year
                                        </option>
                                        <option value="3"@if ($course_details->course_duration == 3) selected @endif>3 Year
                                        </option>
                                        <option value="4" @if ($course_details->course_duration == 4) selected @endif>4 Year
                                        </option>
                                        <option value="5" @if ($course_details->course_duration == 5) selected @endif>5 Year
                                        </option>
                                    </select>
                                    @error('course_duration')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary">Update Course</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                                                                       
                                                                                                                                                                    </div> -->
@endsection
