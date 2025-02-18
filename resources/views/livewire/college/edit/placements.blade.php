
<div>
<script src="https://code.jquery.com/jquery-3.7.1.min.js" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

<script src="https://cdn.ckeditor.com/ckeditor5/41.4.2/classic/ckeditor.js"></script>


<div class="col mx-auto d-flex flex-column">
    <form wire:submit.prevent="update_placement_info" class="card">
        <div class="card-body">
            <h2 class="mb-4">College Placement</h2>

            <div class="row g-3">
              <div class="col-md">
                <div class="form-label">Highest package</div>
                <input type="text" class="form-control" wire:model="high_package" placeholder="Enter amount"
                value="{{ $placement->high_package }}">
                <input type="hidden" value="{{ $placement->id }}" wire:model="placement_id">
              </div>
            </div>

            <div class="row g-3">
              <div class="col-md">
                <div class="form-label">Average Package</div>
                <input type="text" class="form-control" wire:model="avg_package" placeholder="Enter amount"
                value="{{ $placement->avg_package }}">
              </div>
            </div>

            <div class="row g-3">
                    <div class="col-md">
                        <label for="placementDescription" class="font-weight-bold">Placement Description</label>
                        <textarea id="placementDescription" wire:model="placement_description"
                        value="{{$placement->placement_description}}">
                       </textarea>
                    </div>
            </div>

        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Add
                    Placement</button>
            </div>
        </div>
    </form>
</div>

<script>
        $('#placementDescription').summernote({
            placeholder: 'Placement Description',
        });
 </script>
</div>