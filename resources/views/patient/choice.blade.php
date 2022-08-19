{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-header pb-0">
    <x-patient-form-tabs />
    <div class="row">
        <div class="col">
            <h6>Patient Choice</h6>
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
                        <label>Provider</label>
                        <select name="provider" class="form-select" id="provider">
                            <option value="" selected>Select Provider</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('provider')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Referring Provider</label>
                        <select name="reference_provider" class="form-select" id="reference_provider">
                            <option value="" selected>Select Reference provider</option>
                            @foreach ($users as $user)
                            <option value="{{ $user->id }}">{{ $user->name }}</option>
                            @endforeach
                        </select>
                        @error('reference_provider')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Pharmecy</label>
                        <select name="pharmecy" class="form-select" id="pharmecy">
                            <option value="" selected>Select Pharmecy</option>
                            <option value="pharmency1">Pharmecy1</option>
                        </select>
                        @error('pharmecy')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>HIPAA Notice Received</label>
                        <select name="hipaa_notice_received" class="form-select" id="hipaa_notice_received">
                            <option value="" selected>Select HIPAA Notice Received</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('hipaa_notice_received')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Allow Voice Message</label>
                        <select name="allow_voice_message" class="form-select" id="allow_voice_message">
                            <option value="" selected>Select Country</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('allow_voice_message')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Leave Message With</label>
                        <input type="text" class="form-control" name="leave_message_with" id="leave_message_with"
                            placeholder="Enter leave message with">
                        @error('leave_message_with')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Allow Mail Message</label>
                        <select name="allow_mail_message" class="form-select" id="allow_mail_message">
                            <option value="" selected>Select allow mail message</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('allow_mail_message')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Allow SMS</label>
                        <select name="allow_sms" class="form-select" id="allow_sms">
                            <option value="" selected>Select allow sms</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('allow_sms')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Allow Email</label>
                        <select name="allow_email" class="form-select" id="allow_email">
                            <option value="" selected>Select allow email</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('allow_email')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Allow Immunization Registry Use</label>
                        <select name="allow_immunization_registry_use" class="form-control"
                            id="allow_immunization_registry_use">
                            <option value="" selected>Select allow immunization registry use</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('allow_immunization_registry_use')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Allow Immunization Info Sharing</label>
                        <select name="allow_immunization_info_sharing" class="form-select"
                            id="allow_immunization_info_sharing">
                            <option value="" selected>Select allow immunization info sharing</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('allow_immunization_info_sharing')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Allow Health Information Exchange</label>
                        <select name="allow_health_information_exchange" class="form-select"
                            id="allow_health_information_exchange">
                            <option value="" selected>Select allow health information exchange</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('allow_health_information_exchange')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Allow Patient Portal</label>
                        <select name="allow_patient_portal" class="form-select" id="allow_patient_portal">
                            <option value="" selected>Select allow patient portal</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('allow_patient_portal')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>CMS Portal Login</label>
                        <input type="email" name="cms_portal_login" class="form-control" id="cms_portal_login"
                            placeholder="Enter cms portal login">
                        @error('cms_portal_login')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Immunization Registry Status</label>
                        <select name="immunization_registry_status" class="form-select"
                            id="immunization_registry_status">
                            <option value="" selected>Select immunization registry status</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('immunization_registry_status')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Immunization Registry Status Effective Date</label>
                        <input type="date" name="immunization_registry_status_effective_date" class="form-control"
                            id="immunization_registry_status_effective_date"
                            placeholder="Enter immunization registry status effective date">
                        @error('immunization_registry_status_effective_date')<span class="text-danger text-sm">{{
                            $message }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Publicity Code</label>
                        <select name="publicity_code" class="form-select" id="publicity_code">
                            <option value="" selected>Select publicity_code</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('publicity_code')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Publicity Code Effective Date</label>
                        <input type="date" name="publicity_code_effective_date" class="form-control"
                            id="publicity_code_effective_date" placeholder="Enter publicity code effective date">
                        @error('publicity_code_effective_date')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Protection Indicator</label>
                        <select name="publicity_code" class="form-select" id="protection_indicator">
                            <option value="" selected>Select protection indicator</option>
                            <option value="1">YES</option>
                            <option value="0">NO</option>
                        </select>
                        @error('protection_indicator')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Protection Indicator Effective Date</label>
                        <input type="date" name="protection_indicator_effective_date" class="form-control"
                            id="protection_indicator_effective_date"
                            placeholder="Enter protection indicator effective date">
                        @error('protection_indicator_effective_date')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>
            <div class="row">

                <div class="col">
                    <div class="form-group">
                        <label>Care Team (Provider)</label>
                        <input type="text" name="care_team_provider" class="form-control" id="care_team_provider"
                            placeholder="Enter care team provider">
                        @error('care_team_provider')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Care Team (Facility)</label>
                        <input type="date" name="care_team_facility" class="form-control" id="care_team_facility"
                            placeholder="Enter care team facility">
                        @error('care_team_facility')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <button type="submit" id="add_patient" class="btn btn-primary">Submit</button>
            <a href="{{ route('patient.show') }}" class="btn btn-danger">Cancel</a>

        </div>
</div>
</form>
{{-- @endsection --}}