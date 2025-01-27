<div class="col-12 col-md-9 d-flex flex-column">
    <form wire:submit.prevent="add_new_course_eligibility_fees" class="card">
        <div class="card-body">
            <h2 class="mb-4">College Info</h2>
           
            <h3 class="card-title mt-4">College Profile</h3>

            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Course</div>
                    <select name="" id="" class="form-control" wire:model="course_id" required>
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course->id }}">{{ $course->course_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Department</div>
                    <select name="" id="" class="form-control" wire:model="department_id" required>
                        <option value="">Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department->id }}">{{ $department->department_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-md">
                    <label for=""><strong>Eligibility Criteria</strong></label>
                   <input type="text" wire:model="eligibility" id="" class="form-control" placeholder="Enter Eligibility Criteria" required> 
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-md">
                    <label for=""><strong>Fees</strong></label>
                   <input type="text" wire:model="fees" id="" class="form-control" placeholder="Enter Fees Structure" required> 
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Add course
                    department</button>
            </div>
        </div>
      
    </form>
</div>

