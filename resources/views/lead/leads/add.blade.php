@extends('layouts.lead.app')

@push('js')
@endpush
@push('css')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="col-md-6">
                    <form class="card" action="{{ route('lead.submit') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Add Lead</h3>
                            <div class="row row-cards">

                                <div class="form-row col-12">
                                    <div class="form-group col">Lead Name</div>
                                    <input type="text" class="form-control" name="name" placeholder="Lead Name">
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Lead location</div>
                                    <input type="text" class="form-control" name="location" placeholder="Lead Location">
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">email</div>
                                    <input type="text" class="form-control" name="email" placeholder="email">
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">phone</div>
                                    <input type="text" class="form-control" name="phone" placeholder="email">
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Academic Year</div>
                                    <select name="academic_year" id="" class="form-control">
                                        <option value="">Select Academic Year</option>
                                        <option value="2025-26">2025-26</option>
                                        <option value="2026-27">2026-27</option>
                                    </select>
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">lead source</div>
                                       <select name="lead_source" id="" class="form-control">
                                        <option value="">Select Lead Source</option>
                                        <option value="Meta">Meta</option>
                                        <option value="web site">web site</option>
                                        <option value="Others">Others</option>
                                    </select>
                                
                                </div>
                             
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary">Add Lead</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                           
                                                                                                                        </div> -->
@endsection
