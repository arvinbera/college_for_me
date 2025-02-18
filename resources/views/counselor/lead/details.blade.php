@extends('layouts.counselor.app')

@push('js')
@endpush
@push('css')
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">

                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="card-title">Lead Details</div>
                                        <div class="row">
                                            <div class="mb-2 col-6">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/book -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon me-2 text-secondary icon-2">
                                                    <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                                    <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                                    <path d="M3 6l0 13"></path>
                                                    <path d="M12 6l0 13"></path>
                                                    <path d="M21 6l0 13"></path>
                                                </svg>
                                                Name: <strong> {{ $lead_details->name }}</strong>
                                            </div>
                                            <div class="mb-2 col-6">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/briefcase -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon me-2 text-secondary icon-2">
                                                    <path
                                                        d="M3 7m0 2a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v9a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2z">
                                                    </path>
                                                    <path d="M8 7v-2a2 2 0 0 1 2 -2h4a2 2 0 0 1 2 2v2"></path>
                                                    <path d="M12 12l0 .01"></path>
                                                    <path d="M3 13a20 20 0 0 0 18 0"></path>
                                                </svg>
                                                Location: <strong>{{ $lead_details->location }}</strong>
                                            </div>
                                            <div class="mb-2 col-6">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon me-2 text-secondary icon-2">
                                                    <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                                    <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                                    <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                                </svg>
                                                Email: <strong>{{ $lead_details->email }}</strong>
                                            </div>
                                            <div class="mb-2 col-6">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon me-2 text-secondary icon-2">
                                                    <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                                    <path
                                                        d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                                    </path>
                                                </svg>
                                                Phone: <strong>
                                                    {{ $lead_details->phone }}</strong>
                                            </div>
                                            <div class="mb-2 col-6">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon me-2 text-secondary icon-2">
                                                    <path
                                                        d="M4 7a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12z">
                                                    </path>
                                                    <path d="M16 3v4"></path>
                                                    <path d="M8 3v4"></path>
                                                    <path d="M4 11h16"></path>
                                                    <path d="M11 15h1"></path>
                                                    <path d="M12 15v3"></path>
                                                </svg>
                                                Academic Year: <strong>{{ $lead_details->academic_year }}</strong>
                                            </div>
                                            <div class="mb-2 col-6">
                                                <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                    viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                                    class="icon me-2 text-secondary icon-2">
                                                    <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                                    <path d="M12 7v5l3 3"></path>
                                                </svg>
                                                lead source: <strong>{{ $lead_details->lead_source }}</strong>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div>
                            <form class="card" action="{{ route('counselor.remarks.submit') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <h3 class="card-title">Add Remarks</h3>
                                    <div class="row row-cards">
                                        <input type="hidden" name="lead_id" id="" value="{{ $lead_details->id }}">
                                        <div class="form-row col-12">
                                            <div class="form-group col">Status</div>
                                            <select name="status" id="" class="form-control">
                                                <option value="">Select Status</option>
                                                <option value="1">Interested</option>
                                                <option value="2">Not Interested</option>
                                                <option value="3">No Response</option>
                                                <option value="4">Admitted</option>
                                                <option value="5">Admitted Throuh CFM</option>
                                            </select>

                                        </div>
                                        <div class="form-row col-12">
                                            <div class="form-group col">Remarks</div>
                                            <textarea name="remarks" id="" class="form-control"></textarea>

                                        </div>
                                        <div class="form-row col-12">
                                            <div class="form-group col">Interested Courses</div>
                                            <select name="course_id" id="" class="form-control">
                                                <option value="">Select Interested Course</option>
                                                @foreach ($all_courses as $course)
                                                    <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                                                @endforeach
                                                <option value="Other">Other</option>
                                            </select>
                                        </div>

                                        <div class="form-row col-12">
                                            <div class="form-group col">Followup</div>
                                            <select name="follow_up_status" id="" class="form-control">
                                                <option value="">Select Follow up</option>
                                                <option value="1">Followup required</option>
                                                <option value="2">No Followup required</option>
                                            </select>
                                        </div>

                                    </div>
                                </div>
                                <div class="card-footer text-left">
                                    <button type="submit" class="btn btn-primary">Add Remarks</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="mb-3">
                            <form class="card" action="{{ route('counselor.send_to_college') }}" method="post">
                                @csrf
                                <div class="card-body">
                                    <h3 class="card-title">Send Lead to Colleges</h3>
                                    <div class="row row-cards">
                                        <input type="hidden" name="lead_id" id=""
                                            value="{{ $lead_details->id }}">
                                        <div class="form-row col-12">
                                            <div class="form-group col">Colleges</div>
                                            <select class="js-example-basic-multiple form-select pb-3" name="college_id[]"
                                                multiple="multiple">
                                                @foreach ($colleges as $college)
                                                    <option value="{{ $college->id }}">{{ $college->name }}</option>
                                                @endforeach
                                            </select>
                                            <div class="mt-3"><button type="submit" class="btn btn-primary">Send Lead
                                                    To College</button></div>

                                            {{-- <div class="mb-3">
                                                <label class="form-label">Tags input</label>
                                                <select type="text"
                                                    class="form-select tomselected ts-hidden-accessible"
                                                    placeholder="Select tags" id="select-tags" value=""
                                                    multiple="multiple" tabindex="-1">
                                                    <option value="HTML">HTML</option>
                                                    <option value="JavaScript">JavaScript</option>
                                                    <option value="CSS">CSS</option>
                                                    <option value="jQuery">jQuery</option>
                                                    <option value="Bootstrap">Bootstrap</option>
                                                    <option value="Ruby">Ruby</option>
                                                    <option value="Python">Python</option>
                                                </select>
                                                <div class="ts-wrapper form-select multi">
                                                    <div class="ts-control"><input tabindex="0" role="combobox"
                                                            aria-haspopup="listbox" aria-expanded="false"
                                                            aria-controls="select-tags-ts-dropdown"
                                                            id="select-tags-ts-control" placeholder="Select tags"></div>
                                                </div>
                                                <script>
                                                    document.addEventListener("DOMContentLoaded", function() {
                                                        var el;
                                                        window.TomSelect && (new TomSelect(el = document.getElementById('select-tags'), {
                                                            copyClassesToDropdown: false,
                                                            dropdownParent: 'body',
                                                            controlInput: '<input>',
                                                            render: {
                                                                item: function(data, escape) {
                                                                    if (data.customProperties) {
                                                                        return '<div><span class="dropdown-item-indicator">' + data
                                                                            .customProperties + '</span>' + escape(data.text) + '</div>';
                                                                    }
                                                                    return '<div>' + escape(data.text) + '</div>';
                                                                },
                                                                option: function(data, escape) {
                                                                    if (data.customProperties) {
                                                                        return '<div><span class="dropdown-item-indicator">' + data
                                                                            .customProperties + '</span>' + escape(data.text) + '</div>';
                                                                    }
                                                                    return '<div>' + escape(data.text) + '</div>';
                                                                },
                                                            },
                                                        }));
                                                    });
                                                </script>
                                            </div> --}}
                                        </div>

                                    </div>
                                </div>

                            </form>
                        </div>

                        <div>

                            <div class="card">

                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between gap-2">
                                        <div>
                                            Remarks
                                        </div>
                                        @if ($lead_details->status == 1)
                                            <div class="col-auto align-self-center">
                                                <span class="badge badge-outline text-green">Interested</span>
                                            </div>
                                        @elseif ($lead_details->status == 2)
                                            <div class="col-auto align-self-center">
                                                <span class="badge badge-outline text-red">Not Interested</span>
                                            </div>
                                        @elseif ($lead_details->status == 3)
                                            <div class="col-auto align-self-center">
                                                <span class="badge badge-outline text-yellow">No Response</span>
                                            </div>
                                        @elseif ($lead_details->status == 4)
                                            <div class="col-auto align-self-center">
                                                <span class="badge badge-outline text-green">Admitted</span>
                                            </div>
                                        @elseif ($lead_details->status == 5)
                                            <div class="col-auto align-self-center">
                                                <span class="badge badge-outline text-green">Admitted Through CFM</span>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="divide-y">
                                        @foreach ($lead_remarks as $remark)
                                            <div>
                                                <div class="row">
                                                    <div class="col-auto">
                                                        <span class="avatar avatar-1"
                                                            style="background-image: url(./static/avatars/002m.jpg)"></span>
                                                    </div>
                                                    <div class="col">
                                                        <div class="text-truncate">
                                                            {{ $remark->remarks }}
                                                        </div>
                                                        <div class="text-secondary">24 hours ago</div>
                                                    </div>

                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                    {{ $lead_remarks->links('pagination::bootstrap-5') }}

                                </div>

                            </div>
                        </div>
                        <br>
                        <div class="card">
                            <div class="card-body">
                                <div class="mb-2"><strong>College Transfer</strong></div>
                                <div class="divide-y">
                                    @foreach ($lead_transfer_colleges as $lead)
                                        <div>
                                            <div class="row">
                                                <div class="col-auto">
                                                    <span class="avatar avatar-1"
                                                        style="background-image: url(./static/avatars/002m.jpg)"></span>
                                                </div>
                                                <div class="col">
                                                    <div class="text-truncate">
                                                        {{ $lead->college->name }}
                                                    </div>
                                                    <div class="text-secondary">24 hours ago</div>
                                                </div>

                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                {{ $lead_remarks->links('pagination::bootstrap-5') }}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                                                                                               
                                                                                                                                                                                            </div> -->
@endsection
