<div class="col-12 col-md-9 d-flex flex-column">
    <form wire:submit.prevent="submit_course_department" class="card">
        <div class="card-body">
            <h2 class="mb-4">College Info</h2>
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
            <h3 class="card-title mt-4">College Profile</h3>

            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Course</div>
                    <select name="" id="" class="form-control" wire:model="course_id">
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
                    <select name="" id="" class="form-control" wire:model="department_id">
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
                   <input type="text" wire:model="eligibility" id="" class="form-control" placeholder="Enter Eligibility Criteria"> 
                </div>
            </div>
            <div class="row g-3 mt-1">
                <div class="col-md">
                    <label for=""><strong>Fees</strong></label>
                   <input type="text" wire:model="fees" id="" class="form-control" placeholder="Enter Eligibility Criteria"> 
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Add course
                    department</button>
            </div>
        </div>
        @endif
    </form>

    {{-- <form class="card" action="{{route('admin.fees_structure.store')}}" method="post">
                    @csrf
                    <div class="card-body">
                        <h3 class="card-title">Add Fees Structure</h3>
                        <div class="row row-cards">

                            <div class="form-row col-12">
                                <div class="form-group col">Select Course Name</div>
                                <select class="form-control" name="course_id" placeholder="Course Name">
                                    @foreach($courses as $course)
                                    <option value="{{ $course->id }}">
                                        {{ $course->course_name }}
                                    </option>
                                    @endforeach
                                </select>
                                @error('course_id')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">Fees Structure</div>
                                <input type="number" class="form-control" name="fees_structure" placeholder="Enter amount">
                                @error('fees_structure')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-row col-12">
                                <div class="form-group col">Eligibility</div>
                                <input type="text" class="form-control" name="eligibility" placeholder="Enter eligibility">
                                @error('eligibility')
                                <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                        </div>
                    </div>
                    <div class="card-footer text-left">
                        <button type="submit" class="btn btn-primary">Add Fees</button>
                    </div>
                </form> --}}
</div>
