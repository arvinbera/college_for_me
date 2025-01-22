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
                <form class="card" action="{{route('admin.fees_structure.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <h3 class="card-title">Add Fees Structure</h3>
                        <div class="row row-cards">

                            <div class="form-row col-12">
                                <div class="form-group col">Select Course Name</div>
                                <select class="form-control" name="course_id" placeholder="Course Name">
                                    @foreach($courses as $course)
                                    <option value="{{ $course->id }}">
                                        {{ $course->course_name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('course_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-row col-12">
                                <div class="form-group col">Fees Structure</div>
                                <input type="number" class="form-control" name="fees_structure" placeholder="Enter amount">
                                @error('fees_structure')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">Eligibility</div>
                                <input type="text" class="form-control" name="eligibility" placeholder="Enter eligibility">
                                @error('eligibility')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                        </div>
                    </div>
                    <div class="card-footer text-left">
                        <button type="submit" class="btn btn-primary">Add Fees</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                           
                                                                                                                        </div> -->
@endsection