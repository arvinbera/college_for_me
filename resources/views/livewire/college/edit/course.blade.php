<div class="col-12 col-md-9 d-flex flex-column">
    <form wire:submit.prevent="update_course_department" class="card">
        <div class="card-body">
            <h2 class="mb-4">College Info</h2>

            <h3 class="card-title mt-4">College Profile</h3>

            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Course</div>
                    <select name="" id="" class="form-control" wire:model="course_id">
                        <option value="">Select Course</option>
                        @foreach ($courses as $course)
                            <option value="{{ $course?->id }}"@if ($college_course_details?->course_id == $course->id) selected @endif>
                                {{ $course?->course_name }}</option>
                        @endforeach
                    </select>
                    <input type="hidden" wire:model="college_id" value="{{ $college_id }}">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Department</div>
                    <select name="" id="" class="form-control" wire:model="department_id">
                        <option value="">Select Department</option>
                        @foreach ($departments as $department)
                            <option value="{{ $department?->id }}"@if ($college_course_details?->department_id == $department?->id) selected @endif)>
                                {{ $department?->department_name }}</option>
                        @endforeach
                    </select>
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
