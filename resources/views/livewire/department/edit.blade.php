<form class="card" wire:submit.prevent="update_department">
    @csrf
    <div class="card-body">
        <h3 class="card-title">Edit department</h3>
        <div class="row row-cards">

            <div class="form-row col-12">
                <div class="form-group col">Department Name</div>
                <input type="hidden" name="department_id" wire:model="department_id"
                    value="{{ $department_details->id }}">
                <input type="text" class="form-control" wire:model="department_name" placeholder="Department Name"
                    value="{{ $department_details->department_name }}">
                @error('department_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
    </div>
    <div class="card-footer text-left">
        <button class="btn btn-primary">Update
            department</button>
    </div>
</form>
