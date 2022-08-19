{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-header pb-0">
    <x-patient-form-tabs />
    <div class="row">
        <div class="col">
            <h6>Patient Identity</h6>
        </div>
    </div>
</div>
<div class="card-body px-0 pt-0 pb-2">
    <form action="{{ route('patient.store') }}" method="post">
        {{-- @csrf --}}
        <ul id="patiet_errors"></ul>
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Firstname</label>
                        <input type="text" name="firstname" class="form-control" id="firstname"
                            placeholder="Enter firstname">
                        {{-- @error('firstname')<span class="text-danger text-sm">{{ $message }}</span>@enderror --}}
                        <span class="text-danger text-sm" id="patient_firstname"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Lastname</label>
                        <input type="text" name="lastname" class="form-control" id="lastname"
                            placeholder="Enter lastname">
                        {{-- @error('lastname')<span class="text-danger text-sm">{{ $message }}</span>@enderror --}}
                        <span class="text-danger text-sm" id="patient_lastname"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>Date OF Birth</label>
                <input type="date" name="date_of_birth" class="form-control" id="date_of_birth"
                    placeholder="Enter date of birth">
                {{-- @error('date_of_birth')<span class="text-danger text-sm">{{ $message }}</span>@enderror --}}
                <span class="text-danger text-sm" id="patient_date_of_birth"></span>
            </div>

            <div class="row">
                
                <div class="col">
                    <label>Gender</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input gender" value="male" name="gender" type="radio">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input gender" value="female" name="gender" type="radio">
                            <label class="form-check-label">Female</label>
                        </div>
                    </div>
                    <span class="text-danger text-sm" id="patient_gender"></span>
                </div>
                
                <div class="col">
                    <label>Select Marital Status</label>
                    <select class="form-select" name="marital_status" id="marital_status">
                        <option value="" selected>Select</option>

                        @foreach ($marital_statuses as $marital_status)
                        <option value="{{ $marital_status->id }}">{{ $marital_status->name }}</option>
                        @endforeach

                    </select>
                    <span class="text-danger text-sm" id="patient_marital_status"></span>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Lisense/ID</label>
                        <input type="number" name="national_id" class="form-control" id="national_id"
                            placeholder="Enter lisense or national id">
                        {{-- @error('national_id')<span class="text-danger text-sm">{{ $message }}</span>@enderror --}}
                        <span class="text-danger text-sm" id="patient_national_id"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Social Security Number</label>
                        <input type="number" name="social_security_number" class="form-control"
                            id="social_security_number" placeholder="Enter social security number">
                        {{-- @error('social_security_number')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror --}}
                        <span class="text-danger text-sm" id="patient_social_security_number"></span>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>External ID</label>
                        <input type="number" name="external_id" class="form-control" id="external_id"
                            placeholder="Enter external id">
                        {{-- @error('external_id')<span class="text-danger text-sm">{{ $message }}</span>@enderror --}}
                        <span class="text-danger text-sm" id="patient_external_id"></span>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label>User Defined</label>
                <input type="text" name="user_defined" class="form-control" id="user_defined"
                    placeholder="Enter user defined">
                {{-- @error('user_defined')<span class="text-danger text-sm">{{ $message }}</span>@enderror --}}
                <span class="text-danger text-sm" id="patient_user_defined"></span>
            </div>

            <div class="form-group">
                <label>Billing Note</label>
                <input type="text" name="billing_note" class="form-control" id="billing_note"
                    placeholder="Enter billing note">
                {{-- @error('billing_note')<span class="text-danger text-sm">{{ $message }}</span>@enderror --}}
                <span class="text-danger text-sm" id="patient_billing_note"></span>
            </div>

            <button type="submit" id="add_patient" class="btn btn-primary">Submit</button>
            <a href="{{ route('patient.show') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('ajax/router.js') }}"></script> --}}
{{-- @endsection --}}