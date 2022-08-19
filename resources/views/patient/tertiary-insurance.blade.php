{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-header pb-0">
   <x-patient-form-tabs />
    <div class="row">
        <div class="col">
            <h6>Patient Tertiary Insurance</h6>
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
                        <label>Tertiary Insurance Provider</label>
                        <select name="tertiary_tertiary_insurance_provider" class="form-select"
                            id="tertiary_tertiary_insurance_provider">
                            <option value="">Select Tertiary Insurance Provider</option>
                            <option value="p1">P1</option>
                        </select>
                        @error('tertiary_tertiary_insurance_provider')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Plan Name</label>
                        <input name="tertiary_plan_name" class="form-control" id="tertiary_plan_name"
                            placeholder="Enter plan name">
                        @error('tertiary_plan_name')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Subscriber</label>
                        <input type="text" name="tertiary_subscriber" class="form-control" id="tertiary_subscriber"
                            placeholder="Enter subscriber">
                        @error('tertiary_subscriber')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Effective Date</label>
                        <input type="date" name="tertiary_effective_date" class="form-control"
                            id="tertiary_effective_date" placeholder="Enter effective date">
                        @error('tertiary_effective_date')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Relationship</label>
                        <select name="tertiary_relationship" class="form-select" id="tertiary_relationship">
                            <option value="">Select Relationship</option>
                            <option value="r1">r1</option>
                        </select>
                        @error('tertiary_relationship')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Policy Number</label>
                        <input type="text" name="tertiary_policy_number" class="form-control"
                            id="tertiary_policy_number" placeholder="Enter Policy Number">
                        @error('tertiary_policy_number')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            
            <div class="row">
                <div class="col">
                    <label>Gender</label>
                    <div class="form-group">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tertiary_gender" type="radio" value="male"
                                id="tertiary_gender">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" name="tertiary_gender" type="radio" value="female"
                                id="tertiary_gender">
                            <label class="form-check-label">Female</label>
                        </div>
                    </div>
                    @error('tertiary_gender')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Date OF Birth</label>
                        <input name="tertiary_date_of_birth" class="form-select" id="tertiary_date_of_birth"
                            placeholder="Enter date of birth">
                        @error('tertiary_date_of_birth')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Group Number</label>
                        <input type="text" name="tertiary_group_number" class="form-control" id="tertiary_group_number"
                            placeholder="Enter Group Number">
                        @error('tertiary_group_number')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Social Security Number</label>
                        <input type="number" name="tertiary_social_security_number" class="form-control"
                            id="tertiary_social_security_number" placeholder="Enter social security number">
                        @error('tertiary_social_security_number')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Subscriber Employer</label>
                        <input type="text" name="tertiary_subscriber_employer" class="form-control"
                            id="tertiary_subscriber_employer" placeholder="Enter subscriber employer">
                        @error('tertiary_subscriber_employer')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>subscriber employer address</label>
                        <input type="text" name="tertiary_subscriber_employer_address" class="form-control"
                            id="tertiary_subscriber_employer_address" placeholder="Enter subscriber employer address">
                        @error('tertiary_subscriber_employer_address')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>subscriber employer Country</label>
                        <select name="tertiary_subscriber_employer_country" class="form-control"
                            id="tertiary_subscriber_employer_country">
                            <option value="">Select Employer Country</option>
                            <option value="c1">c1</option>
                        </select>
                        @error('tertiary_subscriber_employer_country')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>subscriber Country</label>
                        <select name="tertiary_country" class="form-control" id="tertiary_country">
                            <option value="">Select Country</option>
                            <option value="c1">c1</option>
                        </select>
                        @error('tertiary_country')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>subscriber employer city</label>
                        <select name="tertiary_subscriber_employer_city" class="form-control"
                            id="tertiary_subscriber_employer_city">
                            <option value="">Select Employer City</option>
                            <option value="c1">c1</option>
                        </select>
                        @error('tertiary_subscriber_employer_city')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>subscriber city</label>
                        <select name="tertiary_city" class="form-control" id="tertiary_city">
                            <option value="">Select City</option>
                            <option value="c1">c1</option>
                        </select>
                        @error('tertiary_city')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>subscriber employer state</label>
                        <select name="tertiary_subscriber_employer_state" class="form-control"
                            id="tertiary_subscriber_employer_state">
                            <option value="">Select Employer state</option>
                            <option value="c1">c1</option>
                        </select>
                        @error('tertiary_subscriber_employer_state')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>subscriber state</label>
                        <select name="tertiary_state" class="form-control" id="tertiary_state">
                            <option value="">Select state</option>
                            <option value="c1">c1</option>
                        </select>
                        @error('tertiary_state')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>subscriber employer zipcode</label>
                        <input type="text" name="tertiary_subscriber_employer_zipcode" class="form-control"
                            id="tertiary_subscriber_employer_zipcode" placeholder="Enter employer zipcode">
                        @error('tertiary_subscriber_employer_zipcode')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>subscriber zipcode</label>
                        <input type="text" name="tertiary_zipcode" class="form-control" id="tertiary_zipcode"
                            placeholder="Enter zipcode">
                        @error('tertiary_zipcode')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>subscriber phone</label>
                        <input type="number" name="tertiary_subscriber_phone" class="form-control"
                            id="tertiary_subscriber_phone" placeholder="Enter phone">
                        @error('tertiary_subscriber_phone')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>subscriber co-payment</label>
                        <input name="tertiary_co_payment" class="form-control" id="tertiary_co_payment"
                            placeholder="Enter co-payment">
                        @error('tertiary_co_payment')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>subscriber accept assignment</label>
                        <input type="text" name="tertiary_accept_assignment" class="form-control"
                            id="tertiary_accept_assignment" placeholder="Enter accept assignment">
                        @error('tertiary_accept_assignment')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>

            <button type="submit" id="add_patient" class="btn btn-primary">Submit</button>
            <a href="{{ route('patient.show') }}" class="btn btn-danger">Cancel</a>
        </div>
    </form>
</div>
{{-- @endsection --}}