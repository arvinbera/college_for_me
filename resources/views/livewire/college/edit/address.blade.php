<div class="col-12 col-md-9 d-flex flex-column">
    <form class="card" wire:submit.prevent="update_address">
        <div class="card-body">
            <h2 class="mb-4">College Info</h2>
            @if (session()->has('college_id'))
                {{ session()->get('college_id') }}
            @endif
            <h3 class="card-title mt-4">College Profile</h3>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">College Address</div>
                    <textarea class="form-control" name="" id="" cols="30" rows="10" wire:model="college_address">{{ $college_contact_details?->college_address }}</textarea>
                    <input type="hidden" value="{{ $college_id }}" wire:model="college_id">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">College Pincode</div>
                    <input type="number" name="pincode" id="" class="form-control" wire:model="pincode"
                        value="{{ $college_contact_details?->pincode }}">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select State</div>
                    <select class="form-control" wire:model.live="selectedState">
                        <option value="">Select</option>
                        @foreach ($states as $state)
                            <option value="{{ $state?->id }}" @if ($college_contact_details?->state_id == $state->id) selected @endif>
                                {{ $state?->state_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            @if (!is_null($selectedState))
                <div class="row g-3">
                    <div class="col-md">
                        <div class="form-label">Select District</div>
                        <select name="" id="district" class="form-control" wire:model.live="selectedDistrict">
                            <option value="">Select</option>
                            @foreach ($districts as $district)
                                <option value="{{ $district?->id }}"@if ($college_contact_details?->district_id == $district?->id) selected @endif>
                                    {{ $district?->district_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endif
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select City</div>
                    <select name="" id="" class="form-control" wire:model="city">
                        <option value="">Select</option>
                        <option value="Kolkata">Kolkata</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Hyderbad">Hyderbad</option>
                        <option value="Pune">Pune</option>
                        <option value="Bangalore">Bangalore</option>
                    </select>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Email Address</div>
                    <input type="email" class="form-control" wire:model="email"
                        value="{{ $college_contact_details?->email }}">
                </div>
            </div>

        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Update College Address</button>
            </div>
        </div>
    </form>
</div>
