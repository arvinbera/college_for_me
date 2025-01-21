<div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>
    <div class="col mx-auto d-flex flex-column">
        <form wire:submit.prevent="submit_article" class="card">
            <div class="card-body">
                <h2 class="mb-4">Article Info</h2>

                <h3 class="card-title mt-4">Article</h3>
                <div class="row g-3">
                    <div class="col-md">
                        <div class="form-label">Article Name</div>
                        <input type="text" class="form-control" wire:model="article_name">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md">
                        <div class="form-label">Upload Banner Pics</div>
                        <input type="file" class="form-control">
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md">
                        <div class="form-label">Meta Description</div>
                        <textarea class="form-control" name="meta_description" id="" cols="30" rows="5"
                            wire:model="meta_description"></textarea>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md">
                        <div class="form-label">Article Category</div>
                        <select name="" id="" class="form-control" wire:model="article_category_id">
                            <option value="">Select Category</option>
                            @foreach ($article_categories as $category)
                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="row g-3">
                    <div class="col-md">
                        <label for="articleDescription" class="font-weight-bold">Article Description</label>
                        <textarea id="articleDescription" wire:model="article_description">
                </textarea>
                    </div>

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
    <script>
        $('#articleDescription').summernote({
            placeholder: 'Article Description',
        });
    </script>
</div>
