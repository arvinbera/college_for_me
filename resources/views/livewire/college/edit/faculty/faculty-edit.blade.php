<div class="col-12 col-md-9 d-flex flex-column">
    <form wire:submit.prevent="update_faculty_info" class="card">
        <div class="card-body">
            <h2 class="mb-4">College Faculty</h2>

            <h3 class="card-title mt-4">Faculty Info</h3>
            {{-- <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">College Name</div>
                    <input type="text" class="form-control" wire:model="college_id">
                </div>
            </div> --}}
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Faculty Name</div>
                    <input type="text" class="form-control" wire:model="faculty_name"
                        value="{{ $faculty_details->faculty_name }}">
                    <input type="hidden" value="{{ $faculty_details->id }}" wire:model="faculty_details_id">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Department</div>
                    <select name="" id="" class="form-control" wire:model="department_id">
                        <option value="">Select</option>

                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}" @if ($department->id == $faculty_details->department->id) selected @endif>
                                {{ $department->department_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Faculty Designation</div>
                    <input type="text" class="form-control" wire:model="designation"
                        value="{{ $faculty_details->faculty_designation }}">
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Update
                    Faculty Member</button>
            </div>
        </div>
    </form>
</div>
