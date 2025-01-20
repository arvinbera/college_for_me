@extends('layouts.admin.app')

@push('js')
@endpush
@push('css')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="col">
                    <div class="page-wrapper">
                        <!-- Page header -->

                        <!-- Page body -->
                        <div class="page-body">
                            <div class="container-xl">
                                <div class="card">
                                    <div class="row g-0">
                                        <div class="col-12 col-md-3 border-end">
                                            <div class="card-body">
                                                <h4 class="subheader">College settings</h4>
                                                <div class="list-group list-group-transparent">
                                                    <a href="{{ route('college.add') }}"
                                                        class="list-group-item list-group-item-action d-flex align-items-center">College
                                                        Info</a>
                                                    <a href="{{ route('college.address') }}"
                                                        class="list-group-item list-group-item-action d-flex align-items-center">College
                                                        Address</a>
                                                    <a href="{{ route('college.course_department') }}"
                                                        class="list-group-item list-group-item-action d-flex align-items-center">College
                                                        Courses</a>
                                                    <a href="{{ route('college.gallery') }}"
                                                        class="list-group-item list-group-item-action d-flex align-items-center">College
                                                        Gallery</a>
                                                    <a href="{{ route('college.faculty') }}"
                                                        class="list-group-item list-group-item-action d-flex align-items-center active">Faculty</a>

                                                </div>

                                            </div>
                                        </div>
                                        @livewire('college.add.faculty')
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    </div> -->
@endsection
