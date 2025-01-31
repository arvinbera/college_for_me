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
                    <form class="card" action="{{ route('counselor.submit') }}" method="post">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Add Counselor</h3>
                            <div class="row row-cards">

                                <div class="form-row col-12">
                                    <div class="form-group col">Counselor Name</div>
                                    <input type="text" class="form-control" name="name" placeholder="Counselor Name">
                                
                                </div>
                                <div class="form-row col-12">
                                    <div class="form-group col">Email</div>
                                    <input type="email" class="form-control" name="email" placeholder="Counselor Email">
                                
                                </div>
                             
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary">Add Counselor</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                           
                                                                                                                        </div> -->
@endsection
