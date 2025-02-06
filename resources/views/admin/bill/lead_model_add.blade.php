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
                <form class="card" action="{{route ('store.lead.model')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <h3 class="card-title">Add Course</h3>
                        <div class="row row-cards">

                            <!-- <div class="form-row col-12">
                                <div class="form-group col">College Name</div>
                                <input type="text" class="form-control" name="college_name" placeholder="College Name">
                                @error('college_name')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div> -->

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <label for="inputAddress">College Name</label>
                                    <select class="form-control example" name="college_id" id="gst_type" onchange="gsttype()">
                                        <option value=""> --Select College-- </option>
                                        @foreach ($all_colleges as $college)
                                      {{-- @if (isset($college->school_address[0]?->address))--}}
                                        <option value="{{ $college->id }}">
                                            {{ $college->name }} {{--&nbsp;{{ $college->school_address[0]?->address }} --}}
                                        </option>
                                      {{--  @endif --}}
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <select name="gst_type" class="form-control" id="gst">
                                        <option value="">--Select Gst</option>
                                        <option value="1">CGst & Sgst</option>
                                        <option value="2">Igst</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <select name="bill_type" id="bill_type" class="form-control" onchange="Billtype()">
                                        <option value="">--Select Bill Type--</option>
                                        <option value="Proforma">Proforma</option>
                                        <option value="Original">Original</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">Select Session</div>
                                <select class="form-select" name="course_duration">
                                    <option value="">Select Session</option>
                                    <option value="2">2023-24</option>
                                    <option value="3">2024-25</option>
                                </select>
                                @error('course_duration')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <input type="text" class="form-control" name="location" placeholder="Enter location">
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <input type="text" class="form-control" name="gst_number_college"
                                        placeholder="Enter School GST number">
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <label for="receipt_date">Receipt Date</label>
                                    <input type="date" class="form-control" name="receipt_date">
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <input type="text" class="form-control" name="phone" placeholder="Enter phone">
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <select name="payment_mode" id="pay_mode" class="form-control" onchange="Paymode()">
                                        <option value="">-- Select Payment Mode --</option>
                                        <option value="Offline">Offline</option>
                                        <option value="Online">Online</option>
                                        <option value="Cash">Cash</option>
                                        <option value="cheque">Cheque</option>
                                    </select>
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="card-footer text-left">
                        <button type="submit" class="btn btn-primary">Add bill</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                           
                                                                                                                        </div> -->
@endsection