<form class="card" wire:submit.prevent="submit_department">
    @csrf
    <div class="card-body">
        <h3 class="card-title">Add department</h3>
        <div class="row row-cards">

            <div class="form-row col-12">
                <div class="form-group col">Department Name</div>
                <input type="text" class="form-control" wire:model="department_name" placeholder="Department Name"
                    required>
                @error('department_name')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

        </div>
    </div>
    <div class="card-footer text-left">
        <button class="btn btn-primary">Add
            department</button>
    </div>
</form>
