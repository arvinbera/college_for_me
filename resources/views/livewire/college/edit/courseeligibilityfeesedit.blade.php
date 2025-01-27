<div class="col-12 col-md-9 d-flex flex-column">
    <form wire:submit.prevent="update_course_department_eligibility_fees" class="card">
        <div class="card-body">
            <h2 class="mb-4">College Info</h2>

            <h3 class="card-title mt-4">College Profile</h3>

            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Course</div>
                    <select name="" id="" class="form-select" wire:model="selectedCourse">
                        <option value="">Select Course</option>
                          
                        @foreach ($courses as $course)
                           
                            <option value="{{ $course?->id }}" >
                                {{ $course?->course_name }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" wire:model="college_id" value="{{ $college_id }}">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Department</div>
                    <select  class="form-control" wire:model="selectedDepartment" >
                        <option value="">Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department?->id }}"{{ $department?->id == $course_department?->department_id ? 'selected' : '' }}>
                                {{ $department?->department_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Eligibility</div>
                    <input type="text" name="" wire:model="eligibility" id="" class="form-control" value="{{$course_department?->eligibility}}">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Fees</div>
                    <input type="text" name="" wire:model="fees" id="" class="form-control" >
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">
                <button class="btn btn-primary">Update course
                    department</button>
            </div>
        </div>
    </form>
</div>
