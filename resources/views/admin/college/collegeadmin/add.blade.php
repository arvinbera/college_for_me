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
                    <form class="card" action="{{ route('college.collegeadmin.submit') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Add College Admin</h3>
                            <div class="row row-cards">

                                <div class="form-row col-12">
                                    <div class="form-group col">Name</div>
                                    <input type="text" class="form-control" name="name" placeholder="Enter Name"
                                        required>
                                    <input type="hidden" name="college_id" value="{{ $college_id }}">
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Email</div>
                                    <input type="text" class="form-control" name="email" placeholder="Enter Email"
                                        required>

                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Password</div>
                                    <input type="password" class="form-control" name="password" placeholder="Enter Password"
                                        required>

                                </div>

                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary">Add College Admin</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                                                                                                               
                                                                                                                                                                                                            </div> -->
@endsection
