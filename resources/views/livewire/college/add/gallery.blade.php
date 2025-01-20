<div class="col-12 col-md-9 d-flex flex-column">
    <form wire:submit.prevent="submit_college_pics" class="card">
        <div class="card-body">
            <h2 class="mb-4">College Info</h2>

            <h3 class="card-title mt-4">College Profile</h3>

            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Upload College Logo</div>
                    <input type="file" class="form-control" wire:model="images" multiple>
                </div>
            </div>

        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Add
                    Image</button>
            </div>
        </div>
    </form>
</div>
