@extends('layouts.lead.app')

@push('js')
@endpush
@push('css')
@endpush

@section('content')
    <div class="page-wrapper">
        <!-- Page header -->
        <div class="page-header d-print-none">
            <div class="container-xl">
                <div class="row g-2 align-items-center">
                    <div class="col">
                        <!-- Page pre-title -->
                        <div class="page-pretitle">
                            Settings
                        </div>
                        <h2 class="page-title">
                            Assign Counselors
                        </h2>
                    </div>
                    <!-- Page title actions -->

                </div>
            </div>
        </div>
        <!-- Page body -->
        <div class="page-body">
            <div class="container-xl">
                <div class="row row-deck row-cards">
                    <div class="col-12">
                        <div class="card card-md">
                            <div class="card-stamp card-stamp-lg">
                                <div class="card-stamp-icon bg-primary">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M9 11l3 3l8 -8" />
                                        <path d="M20 12v6a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2h9" />
                                    </svg>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="row align-items-center">
                                    <div class="col-10">
                                        <h3 class="h1">Assign To Counselors</h3>
                                        <div class="markdown text-muted">
                                            Assign Leads to Counselors from here.
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <form action="{{route('lead.assign.counselor.submit')}}" method="post">
                                    @csrf
                                    <div>
                                        <select name="counselor_id" id="" class="form-control">
                                            <option value="">Select Counselor</option>
                                            @foreach ($counselors as $counselor)
                                                <option value="{{ $counselor->id }}">{{ $counselor->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <br>
                                    <strong>Select All</strong>
                                    <input type="checkbox" name="" id="selectAll" class="lead-checkbox"
                                        onclick="toggleAll()">
                                    <div class="table-responsive">
                                        <table class="table card-table table-vcenter text-nowrap datatable">
                                            <thead>
                                                <tr>
                                                    <th class="w-1">Sl</th>
                                                    <th>Select</th>
                                                    <th>Name</th>
                                                    <th>Phone</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-tbody">
                                                @foreach ($assign_lead_list as $lead)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td><input type="checkbox" class="lead-checkbox" name="lead[]"
                                                                id="{{ $loop->iteration }}"
                                                                onclick="myFunction('{{ $loop->iteration }}')" value="{{ $lead->id }}"></td>
                                                        <td>{{ $lead->name }}</td>
                                                        <td>{{ $lead->email }}</td>
                                                        <td>
                                                            <a href="{{ route('lead.details', $lead->id) }}"
                                                                class="btn btn-sm btn-outline-primary">View</a>
                                                            <a href="{{ route('lead.edit', $lead->id) }}"
                                                                class="btn btn-sm btn-outline-primary">Edit</a>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>

                                        </table>
                                    </div>
                                    <div class="mt-2 justify-center"><button class="btn btn-primary" id="assign" style="display:none;">Assign</button></div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <script>
                var leads = [];
                function myFunction(x) {
                    if (document.getElementById(x).checked) {
                        leads.push(x);
                    }
                    if (document.getElementById(x).checked == false) {
                        const index = leads.indexOf(x);
                        if (index > -1) {
                            leads.splice(index, 1);
                        }
                    }
                    console.log(leads);
                    if (leads.length > 0) {
                        document.getElementById('assign').style.display = "block";
                    }
                    if (leads.length == 0) {
                        document.getElementById('assign').style.display = "none";
                    }
                }

                function toggleAll() {
                    var selectAllCheckbox = document.getElementById('selectAll');
                    var leadCheckboxes = document.getElementsByClassName('lead-checkbox');
                    leads = []; // Reset the leads array

                    for (let i = 0; i < leadCheckboxes.length; i++) {
                        leadCheckboxes[i].checked = selectAllCheckbox.checked;

                        if (selectAllCheckbox.checked) {
                            leads.push(leadCheckboxes[i].value); // Add all lead IDs to the array if selected
                        }
                    }

                    toggleAssignButton();
                    console.log(leads);
                }

                function toggleAssignButton() {
                    if (leads.length > 0) {
                        document.getElementById('assign').style.display = "block";
                    } else {
                        document.getElementById('assign').style.display = "none";
                    }
                }
            </script>

        </div>
    </div>
@endsection
