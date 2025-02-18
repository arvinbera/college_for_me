@extends('layouts.admin.app')

@push('js')
    
@endpush
@push('css')
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
@endpush

@section('content')
    <div class="page-wrapper">
        <div class="page-body">
            <div class="container-xl">
                <div class="col-md-9 mx-auto">

                    <div class="col mx-auto d-flex flex-column">
                        <form method="post" action="{{ route('article.update') }}" class="card"
                            enctype="multipart/form-data">
                            @csrf
                            <div class="card-body">
                                <h2 class="mb-4">Article Info</h2>

                                <h3 class="card-title mt-4">Article</h3>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">Article Name</div>
                                        <input type="text" class="form-control" name="article_name" value="{{ $article_details?->title }}">
                                        <input type="hidden" name="article_id" id="" value="{{$article_details?->id }}" >
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">Article Slug</div>
                                        <input type="text" class="form-control" name="article_slug" >
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">Upload Banner Pics</div>
                                        <input type="file" class="form-control" name="banner_image">
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">Meta Description</div>
                                        <textarea class="form-control" name="meta_description" id="" cols="30" rows="5"
                                            name="meta_description">{{$article_details?->meta_description}}</textarea>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <div class="form-label">Article Category</div>
                                        <select id="" class="form-control"
                                            name="article_category_id">
                                            <option value="">Select Category</option>
                                            @foreach ($article_categories as $category)
                                                <option value="{{ $category->id }}" @if ($article_details?->article_category_id == $category->id)
                                                        selected
                                                @endif>{{ $category->title }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="row g-3">
                                    <div class="col-md">
                                        <label for="articleDescription" class="font-weight-bold">Article Description</label>
                                        <textarea type="text" id="summernote2" name="article_description" class="form-control" placeholder="Article Description"
                                            required>
                                            {{$article_details?->article_description}}
                                        </textarea>
                                    </div>

                                </div>
                            </div>
                            <script>
                                $('#summernote2').summernote({
                                    placeholder: 'Article Description',
                                    tabsize: 2,
                                    height: 300,
                                    toolbar: [
                                        ['style', ['style']],
                                        ['font', ['bold', 'italic', 'underline', 'clear', 'superscript', 'subscript']],

                                        ['fontsize', ['fontsize']],
                                        ['color', ['color']],
                                        ['para', ['ul', 'ol', 'paragraph', 'height']],
                                        ['insert', ['link', 'picture', 'video', 'hr']],
                                        ['table', ['table']],
                                        ['view', ['fullscreen', 'codeview', 'help']],
                                        ['misc', ['undo', 'redo']]
                                    ],
                                    callbacks: {
                                        onInit: function() {
                                            $('#summernote').on('summernote.change', function() {

                                            });
                                        },
                                        onEnter: function() {
                                            console.log('Enter/Return key pressed');
                                        },
                                        onFocus: function() {
                                            console.log('Editable area is focused');
                                        },
                                        onBlur: function() {
                                            console.log('Editable area loses focus');
                                        },
                                        onKeyup: function(e) {
                                            console.log('Key is released:', e.keyCode);
                                        },

                                    }
                                });
                            </script>
                            <div class="card-footer bg-transparent mt-auto">
                                <div class="btn-list justify-content-end">

                                    <button class="btn btn-primary">Update
                                        Article</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div> -->
@endsection
