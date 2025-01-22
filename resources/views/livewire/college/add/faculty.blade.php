<div class="col-12 col-md-9 d-flex flex-column">
    <form wire:submit.prevent="submit_faculty_info" class="card">
        <div class="card-body">
            <h2 class="mb-4">College Faculty</h2>
            @if (session()->has('college_id'))
                {{ session()->get('college_id') }}
            @else
                <div class="row g-3">
                    <div class="col-md">
                        <div class="form-label">Select College</div>
                        <select class="form-control" wire:model.live="selectedOption">
                            <option value="">Select College</option>
                            @foreach ($colleges as $college)
                                <option value="{{ $college->id }}">{{ $college->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endif
            @if (session()->has('college_id'))
            <h3 class="card-title mt-4">Faculty Info</h3>
           
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Faculty Name</div>
                    <input type="text" class="form-control" wire:model="faculty_name">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Department</div>
                    <select name="" id="" class="form-control" wire:model="department_id">
                        <option value="">Select</option>

                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Faculty Designation</div>
                    <input type="text" class="form-control" wire:model="designation">
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Add
                    Faculty Member</button>
            </div>
        </div>
        @endif
    </form>
</div>
