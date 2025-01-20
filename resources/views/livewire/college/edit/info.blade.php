<div class="col-12 col-md-9 d-flex flex-column">
    <form wire:submit.prevent="update_college_info" class="card" enctype="multipart/form-data">
        <div class="card-body">
            <h2 class="mb-4">College Info</h2>

            <h3 class="card-title mt-4">College Profile</h3>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">College Name</div>
                    <input type="text" class="form-control" wire:model="college_name"
                        value="{{ $college_details->name }}">
                    <input type="hidden" value="{{ $college_id }}" wire:model="college_id">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Upload College Logo</div>
                    <input type="file" class="form-control" wire:model="logo">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">College About</div>
                    <textarea class="form-control" name="" id="" cols="30" rows="10" wire:model="college_about">
                        {{ $college_details->college_about }}
                    </textarea>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select Organization type</div>
                    <select name="" id="" class="form-control" wire:model="organization_type">
                        <option value="">Select</option>
                        <option value="1"@if ($college_details->institute_type == 1) selected @endif>College</option>
                        <option value="2"@if ($college_details->institute_type == 2) selected @endif>University</option>
                    </select>
                </div>
            </div>
        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Update
                    College Info</button>
            </div>
        </div>
    </form>
</div>
