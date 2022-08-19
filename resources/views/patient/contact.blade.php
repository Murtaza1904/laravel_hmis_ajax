{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-header pb-0">
    <x-patient-form-tabs />
    <div class="row">
        <div class="col">
            <h6>Patient Contact</h6>
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
                        <label>Address</label>
                        <input type="text" name="address" class="form-control" id="address" placeholder="Enter address">
                        @error('address')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Country</label>
                        <select name="country" class="form-control" id="country">
                            <option value="" selected>Select Country</option>
                            @foreach ($countries as $country)
                            <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('country')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>city</label>
                        <select name="city" class="form-control" id="city">
                            <option value="" selected>Select City</option>
                            @foreach ($cities as $city)
                            <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        @error('city')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>State</label>
                        <select name="state" class="form-control" id="state">
                            <option value="" selected>Select State</option>
                            @foreach ($states as $state)
                            <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        @error('state')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>County</label>
                        <select name="county" class="form-control" id="county">
                            <option value="" selected>Select Country</option>
                            @foreach ($counties as $county)
                            <option value="{{ $county->id }}">{{ $county->name }}</option>
                            @endforeach
                        </select>
                        @error('county')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>County</label>
                        <input type="number" class="form-select" name="postal_code" id="postal_code"
                            placeholder="Enter postal code">
                        @error('postal_code')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Mother`s Name</label>
                        <input type="text" name="mother_name" class="form-control" id="mother_name"
                            placeholder="Enter mother name">
                        @error('mother_name')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Emergency Contact</label>
                        <input type="number" name="emergency_contact" class="form-control" id="emergency_contact"
                            placeholder="Enter emergency contact">
                        @error('emergency_contact')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Emergency Phone</label>
                        <input type="text" name="emergency_phone" class="form-control" id="emergency_phone"
                            placeholder="Enter emergency phone">
                        @error('emergency_phone')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Home Phone</label>
                        <input type="text" name="home_phone" class="form-control" id="home_phone"
                            placeholder="Enter home phone">
                        @error('home_phone')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Work Phone</label>
                        <input type="text" name="work_phone" class="form-control" id="work_phone"
                            placeholder="Enter work phone">
                        @error('work_phone')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Mobile Phone</label>
                        <input type="text" name="mobile_phone" class="form-control" id="mobile_phone"
                            placeholder="Enter mobile phone">
                        @error('mobile_phone')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Contact Email</label>
                        <input type="email" name="contact_email" class="form-control" id="contact_email"
                            placeholder="Enter contact email">
                        @error('contact_email')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Trusted Email</label>
                        <input type="email" name="trusted_email" class="form-control" id="trusted_email"
                            placeholder="Enter trusted email">
                        @error('trusted_email')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <button type="submit" id="add_patient" class="btn btn-primary">Submit</button>
            <a href="{{ route('patient.show') }}" class="btn btn-danger">Cancel</a>

        </div>
    </form>
</div>
{{-- @endsection --}}