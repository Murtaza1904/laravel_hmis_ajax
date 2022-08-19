{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-header pb-0">
    <x-patient-form-tabs />
    <div class="row">
        <div class="col">
            <h6>Patient Employer</h6>
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
                        <label>Industry</label>
                        <select name="industry" class="form-select" id="industry">
                            <option value="">Select Industry</option>
                            <option value="Law Firm">Law Firm</option>
                            <option value="Engineering Firm">Engineering Firm</option>
                            <option value="Construction Firm">Construction Firm</option>
                        </select>
                        @error('industry')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" name="occupation" class="form-control" id="occupation"
                            placeholder="Enter occupation">
                        @error('occupation')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Employer Name</label>
                        <input type="text" name="employer_name" class="form-control" id="employer_name"
                            placeholder="Enter employer name">
                        @error('employer_name')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Employer Address</label>
                        <input type="text" name="employer_address" class="form-control" id="employer_address"
                            placeholder="Enter employer address">
                        @error('employer_address')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Employer Country</label>
                        <select name="employer_country" class="form-select" id="employer_country">
                            <option value="">Select Country</option>
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->name }}</option>
                            @endforeach
                        </select>
                        @error('employer_country')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Employer City</label>
                        <select name="employer_city" class="form-select" id="employer_city">
                            <option value="">Select City</option>
                            @foreach ($cities as $city)
                                <option value="{{ $city->id }}">{{ $city->name }}</option>
                            @endforeach
                        </select>
                        @error('employer_city')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Employer State</label>
                        <select name="employer_state" class="form-select" id="employer_state">
                            <option value="">Select State</option>
                            @foreach ($states as $state)
                                <option value="{{ $state->id }}">{{ $state->name }}</option>
                            @endforeach
                        </select>
                        @error('employer_state')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Employer Postal Code</label>
                        <input type="text" name="employer_postal_code" class="form-control" id="employer_postal_code"
                            placeholder="Enter employer postal code">
                        @error('employer_postal_code')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

         

            <button type="submit" id="add_patient" class="btn btn-primary">Submit</button>
            <a href="{{ route('patient.show') }}" class="btn btn-danger">Cancel</a>

        </div>
    </form>
</div>
{{-- @endsection --}}