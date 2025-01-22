<div class="col-12 col-md-9 d-flex flex-column">
    <form class="card" wire:submit.prevent="submit_address">
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
                    <div class="form-label">College Address</div>
                    <textarea class="form-control" name="" id="" cols="30" rows="10" wire:model="college_address"></textarea>
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">College Pincode</div>
                    <input type="number" name="pincode" id="" class="form-control" wire:model="pincode">
                </div>
            </div>
            <div class="row g-3">
                <div class="col-md">
                    <div class="form-label">Select State</div>
                    <select class="form-control" wire:model.live="selectedState">
                        <option value="">Select</option>
                        @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->state_name }}</option>
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
                                <option value="{{ $district->id }}">{{ $district->district_name }}</option>
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
                    <input type="email" class="form-control" wire:model="email">
                </div>
            </div>

        </div>
        <div class="card-footer bg-transparent mt-auto">
            <div class="btn-list justify-content-end">

                <button class="btn btn-primary">Add College Address</button>
            </div>
        </div>
    @endif
    </form>
</div>
