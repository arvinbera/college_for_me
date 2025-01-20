<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
<div class="col mx-auto d-flex flex-column">
    <form wire:submit.prevent="submit_college_info" class="card">
        <div class="card-body">
            <h2 class="mb-4">Article Info</h2>

            <h3 class="card-title mt-4">Article</h3>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Article Name</div>
                    <input type="text" class="form-control" wire:model="college_name">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Upload Banner Pics</div>
                    <input type="file" class="form-control" wire:model="logo">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Meta Description</div>
                    <textarea class="form-control" name="" id="" cols="30" rows="5" wire:model="college_about"></textarea>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <label for="articleDescription" class="font-weight-bold">Article Description</label>
                    <textarea type="text" id="summernote2" name="blog_content" class="form-control" placeholder="Article Description"
                        required>
                </textarea>
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
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Add
                    Article</button>
            </div>
        </div>
    </form>
</div>
