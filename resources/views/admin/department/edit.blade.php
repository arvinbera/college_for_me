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

                    @livewire('department.edit', ['id' => $id])
                </div>
            </div>
        </div>
    </div>

    </div> -->
@endsection
