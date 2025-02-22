<form class="card" wire:submit.prevent="submit_course_category">
    @csrf
    <div class="card-body">
        <h3 class="card-title">Add Course Category</h3>
        <div class="row row-cards">

            <div class="form-row col-12">
                <div class="form-group col">Course Category Name</div>
                <input type="text" class="form-control" wire:model="course_category_name"
                    placeholder="Course Category Name" required>
                @error('course_category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
    </div>
    <div class="card-footer text-left">
        <button class="btn btn-primary">Add
            Course Category</button>
    </div>
</form>
