{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-header pb-0">
   <x-patient-form-tabs />
    <div class="row">
        <div class="col">
            <h6>Patient Guardian</h6>
        </div>
    </div>
</div>
<div class="card-body px-0 pt-0 pb-2">
    <form action="{{ route('patient.store') }}" method="post">
        @csrf
        <div class="container">

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Guardian Name</label>
                        <input type="text" name="guardian_name" class="form-select" id="guardian_name"
                            placeholder="Enter name">
                        @error('guardian_name')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Relationship with Guardian</label>
                        <select name="guardian_relationship" class="form-control" id="guardian_relationship">
                            <option value="">Select Relationship</option>
                        </select>
                        @error('guardian_relationship')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <label>Gender</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="guardian_gender" type="radio" value="male"
                                id="guardian_gender">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="guardian_gender" type="radio" value="female"
                                id="guardian_gender">
                            <label class="form-check-label">Female</label>
                        </div>
                    </div>
                    @error('guardian_gender')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Guardian Address</label>
                        <input type="text" name="guardian_address" class="form-control" id="guardian_address"
                            placeholder="Enter guardian address">
                        @error('guardian_address')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Guardian Country</label>
                        <select name="guardian_country" class="form-select" id="guardian_country">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('guardian_country')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Guardian City</label>
                        <select name="guardian_city" class="form-select" id="guardian_city">
                            <option value="">Select City</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        @error('guardian_city')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Guardian State</label>
                        <select name="guardian_state" class="form-select" id="guardian_state">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        @error('guardian_state')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Guardian Postal Code</label>
                        <input type="text" name="guardian_postal_code" class="form-control" id="guardian_postal_code"
                            placeholder="Enter employer postal code">
                        @error('guardian_postal_code')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Guardian Phone Number</label>
                        <input type="text" name="guardian_postal_code" class="form-control" id="guardian_postal_code"
                            placeholder="Enter guardian phone">
                        @error('guardian_phone')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Guardian Work Phone</label>
                        <input type="text" name="guardian_work_phone" class="form-control" id="guardian_work_phone"
                            placeholder="Enter guardian work phone">
                        @error('guardian_work_phone')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Guardian guardian email</label>
                        <input type="text" name="guardian_email" class="form-control" id="guardian_email"
                            placeholder="Enter guardian email">
                        @error('guardian_email')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <button type="submit" id="add_patient" class="btn btn-primary">Submit</button>
            <a href="{{ route('patient.show') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>
{{-- @endsection --}}