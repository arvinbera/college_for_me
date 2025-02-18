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
                    <form class="card" action="{{ route('lead.update') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Update Lead</h3>
                            <div class="row row-cards">

                                <div class="form-row col-12">
                                    <div class="form-group col">Lead Name</div>
                                    <input type="text" class="form-control" name="name" placeholder="Lead Name" value="{{ $lead_details->name }}">
                                    <input type="hidden" name="id" value="{{ $lead_details->id }}">
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Lead location</div>
                                    <input type="text" class="form-control" name="location" placeholder="Lead Location" value="{{ $lead_details->location }}">
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">email</div>
                                    <input type="text" class="form-control" name="email" placeholder="email" value="{{ $lead_details->email }}">
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">phone</div>
                                    <input type="text" class="form-control" name="phone" placeholder="phone" value="{{ $lead_details->phone }}">
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Academic Year</div>
                                    <select name="academic_year" id="" class="form-control">
                                        <option value="">Select Academic Year</option>
                                        <option value="2025-26" @if($lead_details->academic_year == '2025-26') selected @endif>2025-26</option>
                                        <option value="2026-27" @if($lead_details->academic_year == '2026-27') selected @endif>2026-27</option>
                                    </select>
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">lead source</div>
                                       <select name="lead_source" id="" class="form-control">
                                        <option value="">Select Lead Source</option>
                                        <option value="Meta" @if($lead_details->lead_source == 'Meta') selected @endif>Meta</option>    
                                        <option value="web site" @if ($lead_details->lead_source == 'web site')
                                            selected                                            
                                        @endif>web site</option>
                                        <option value="Others" @if($lead_details->lead_source == 'Others') selected @endif>Others</option>
                                    </select>
                                
                                </div>
                             
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary">Update Lead</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                           
                                                                                                                        </div> -->
@endsection
