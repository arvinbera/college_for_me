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

                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="card-title">Lead Details</div>
                                <div class="mb-2">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/book -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon me-2 text-secondary icon-2">
                                        <path d="M3 19a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                        <path d="M3 6a9 9 0 0 1 9 0a9 9 0 0 1 9 0"></path>
                                        <path d="M3 6l0 13"></path>
                                        <path d="M12 6l0 13"></path>
                                        <path d="M21 6l0 13"></path>
                                    </svg>
                                    Name: <strong> {{ $lead_details->name }}</strong>
                                </div>
                                <div class="mb-2">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/briefcase -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
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
                                <div class="mb-2">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/home -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon me-2 text-secondary icon-2">
                                        <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                                        <path d="M9 21v-6a2 2 0 0 1 2 -2h2a2 2 0 0 1 2 2v6"></path>
                                    </svg>
                                    Email: <strong>{{ $lead_details->email }}</strong>
                                </div>
                                <div class="mb-2">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/map-pin -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon me-2 text-secondary icon-2">
                                        <path d="M9 11a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                                        <path
                                            d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z">
                                        </path>
                                    </svg>
                                    Phone: <strong>
                                        {{ $lead_details->phone }}</strong>
                                </div>
                                <div class="mb-2">
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/calendar -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
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
                                <div>
                                    <!-- Download SVG icon from http://tabler.io/icons/icon/clock -->
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="icon me-2 text-secondary icon-2">
                                        <path d="M3 12a9 9 0 1 0 18 0a9 9 0 0 0 -18 0"></path>
                                        <path d="M12 7v5l3 3"></path>
                                    </svg>
                                    lead source: <strong>{{ $lead_details->lead_source }}</strong>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
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
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                               
                                                                                                                            </div> -->
@endsection
