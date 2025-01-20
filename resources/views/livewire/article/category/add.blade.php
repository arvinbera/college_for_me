<div class="col mx-auto d-flex flex-column">
    <form wire:submit.prevent="submit_college_info" class="card">
        <div class="card-body">
            <h2 class="mb-4">Article Info</h2>

            <h3 class="card-title mt-4">Article</h3>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Article Category Name</div>
                    <input type="text" class="form-control" wire:model="category_name">
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Add
                    Article Category</button>
            </div>
        </div>
    </form>
</div>
