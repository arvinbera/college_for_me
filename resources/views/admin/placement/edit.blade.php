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
                <form class="card" action="{{route ('placement.update', $placement_edit->id)}}" method="post">
                    @csrf
                    <div class="card-body">
                        <h3 class="card-title">Edit Placement</h3>
                        <div class="row row-cards">

                        <div class="form-row col-12">
                                <div class="form-group col">Highest package</div>
                                <input type="number" class="form-control" name="high_package" placeholder="Enter amount"
                                value="{{ $placement_edit->high_package }}">
                                @error('high_package')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-row col-12">
                                <div class="form-group col">Average Structure</div>
                                <input type="number" class="form-control" name="avg_package" placeholder="Enter amount"
                                value="{{ $placement_edit->avg_package }}">
                                @error('avg_package')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-left">
                        <button type="submit" class="btn btn-primary">Update Placement</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                           
                                                                                                                        </div> -->
@endsection