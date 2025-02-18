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
                    <form class="card" action="{{ route('lead.bulk.upload') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h3 class="card-title">Upload Lead</h3>
                            <div class="row row-cards">

                                <div class="form-row col-12">
                                    <div class="form-group col">Upload File</div>
                                    <input type="file" class="form-control" name="file" >
                                  
                                </div>
                               
                            </div>
                        </div>
                        <div class="card-footer text-left">
                            <button type="submit" class="btn btn-primary">Upload</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection