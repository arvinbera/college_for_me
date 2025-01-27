@extends('layouts.admin.app')

@push('js')
@endpush
@push('css')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
@endpush

@section('content')
<div class="page-wrapper">
    <div class="page-body">
        <div class="container-xl">
            <div class="col-md-6">
                <form class="card" action="{{route ('placement.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <h3 class="card-title">Add Placement</h3>
                        <div class="row row-cards">

                        <div class="form-row col-12">
                                <div class="form-group col">Highest package</div>
                                <input type="number" class="form-control" name="high_package" placeholder="Enter amount">
                                @error('high_package')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>


                            <div class="form-row col-12">
                                <div class="form-group col">Average Structure</div>
                                <input type="number" class="form-control" name="avg_package" placeholder="Enter amount">
                                @error('avg_package')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                               <!-- Article Description -->
                    <div class="form-group">
                        <label for="articleDescription" class="font-weight-bold">Article Description</label>
                        <textarea type="text" id="summernote" name="blog_content" class="form-control"
                            placeholder="Article Description" required>
                        </textarea>
                        @error('article_description')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                        </div>
                    </div>
                    <div class="card-footer text-left">
                        <button type="submit" class="btn btn-primary">Add Placement</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- <div class="col-12" style="margin-top:75px;">
                                                                                                                           
                                                                                                                        </div> -->
@endsection

@push('js')
<script>
        $(document).ready(function() {
            // Initialize Summernote
            $('#summernote').summernote({
                placeholder: 'Write something amazing...',
                tabsize: 2,
                height: 200
            });
        });
</script>
@endpush