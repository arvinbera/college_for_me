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
                                    <select class="js-example-basic-single form-select" name="college_id" id="gst_type" onchange="gsttype()">
                                        <option value=""> --Select College-- </option>
                                        @foreach ($all_colleges as $college)
                                        {{-- @if (isset($college->school_address[0]?->address))--}}
                                        <option value="{{ $college->id }}">
                                            {{ $college->name }} {{--&nbsp;{{ $college->school_address[0]?->address }} --}}
                                        </option>
                                        {{-- @endif --}}
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <select name="gst_type" class="form-control" id="gst" style="display:none">
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

                            <div class="form-row col-12" style="display:none" id="proforma">
                                <div class="form-group col">
                                    <input type="text" name="proforma_total_amount" placeholder="Enter total amount to be paid"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="form-row col-12" id="original">
                                <div class="form-group col">
                                    <input type="text" class="form-control" name="recived_amount"
                                        placeholder="Enter received amount">
                                </div>
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">
                                    <input type="text" class="form-control" name="total"
                                        placeholder="Enter total fees amount">
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
                                    <select name="payment_mode" id="pay_mode" class="form-control" onchange="paymode()">
                                        <option value="">-- Select Payment Mode --</option>
                                        <option value="Offline">Offline</option>
                                        <option value="Online">Online</option>
                                        <option value="Cash">Cash</option>
                                        <option value="cheque">Cheque</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-row col-12" style="display:none" id="online">
                                <div class="form-group col">
                                    <input type="text" placeholder="Enter transaction Id" name="transaction_id"
                                        class="form-control">
                                </div>
                            </div>

                            <div class="form-row col-12" style="display:none" id="cheque">
                                <div class="form-group col">
                                    <input type="text" placeholder="Enter bank name" name="bank_name" class="form-control">
                                </div>
                                <div class="form-group col">
                                    <input type="text" placeholder="Enter cheque number" name="check_number"
                                        class="form-control">
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

<!-- <div class="col-12" style="margin-top:75px;"></div> -->
@endsection

@push('js')
<script>
    function paymode() {
        var paymode = document.getElementById('pay_mode').value;
        // alert('hi');
        if (paymode == "cheque") {
            document.getElementById('cheque').style.display = 'block';
        } else {
            document.getElementById('cheque').style.display = 'none';
        }
        if (paymode == "Online") {
            document.getElementById('online').style.display = 'block';
        } else {
            document.getElementById('online').style.display = 'none';
        }

    }

    function gsttype() {
        var gsttype = document.getElementById('gst_type').value;
        var gst = document.getElementById('gst');

        if (gsttype > 0) {
            gst.style.display = 'block';
        } else {
            gst.style.display = 'none';
        }
    }

    function Billtype(){
        var billtype = document.getElementById('bill_type').value;
        if (billtype == "Proforma") {
            document.getElementById('proforma').style.display = "block";
            document.getElementById('original').style.display = "none";
        } else {
            document.getElementById('proforma').style.display = "none";
            document.getElementById('original').style.display = "block";
        }
    }
</script>
<script>
$(document).ready(function() {
    $('.js-example-basic-single').select2();
});

</script>
@endpush