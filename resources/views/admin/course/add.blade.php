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
                    <form class="card" action="{{ route('course.submit') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Add Course</h3>
                            <div class="row row-cards">

                                <div class="form-row col-12">
                                    <div class="form-group col">Course Name</div>
                                    <input type="text" class="form-control" name="course_name" placeholder="Course Name">
                                    @error('course_name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Select Course Duration</div>
                                    <select class="form-select" name="course_duration">
                                        <option value="">Select Course Duration</option>
                                        <option value="2">2 Year</option>
                                        <option value="3">3 Year</option>
                                        <option value="4">4 Year</option>
                                        <option value="5">5 Year</option>
                                    </select>
                                    @error('course_duration')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>

                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary">Add Course</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                           
                                                                                                                        </div> -->
@endsection
