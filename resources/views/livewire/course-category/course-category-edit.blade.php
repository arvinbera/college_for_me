<form class="card" wire:submit.prevent="update_course_category">
    @csrf
    <div class="card-body">
        <h3 class="card-title">Edit Course Category</h3>
        <div class="row row-cards">

            <div class="form-row col-12">
                <div class="form-group col">Course Category Name</div>
                <input type="hidden" name="course_category_id" wire:model="course_category_id"
                    value="{{ $course_category_details->id }}">
                <input type="text" class="form-control" wire:model="course_category_name"
                    placeholder="Department Name" value="{{ $course_category_details->course_category_name }}">
                @error('course_category_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
    </div>
    <div class="card-footer text-left">
        <button class="btn btn-primary">Update
            Course Category</button>
    </div>
</form>
