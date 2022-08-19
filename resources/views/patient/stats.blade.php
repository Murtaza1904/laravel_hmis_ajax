{{-- @extends('layouts.app')
@section('content') --}}
<div class="card-header pb-0">
    <x-patient-form-tabs />
    <div class="row">
        <div class="col">
            <h6>Patient Stats</h6>
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
                        <label>Language</label>
                        <select name="language" class="form-select" id="language">
                            <option value="" selected>Select Language</option>
                            @foreach ($languages as $language)
                            <option value="{{ $language->id }}">{{ $language->name }}</option>
                            @endforeach
                        </select>
                        @error('language')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Ethnicity</label>
                        <select name="ethnicity" class="form-select" id="ethnicity">
                            <option value="" selected>Select Ethnicity</option>
                            <option value="E1">E1</option>
                        </select>
                        @error('ethnicity')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Race</label>
                        <select name="race" class="form-select" id="race">
                            <option value="" selected>Select race</option>
                            <option value="r1">r1</option>
                        </select>
                        @error('race')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Financial Review Date</label>
                        <input type="date" name="financial_review_date" class="form-control" id="financial_review_date"
                            placeholder="Enter financial review date">
                        @error('rfinancial_review_dateace')<span class="text-danger text-sm">{{ $message
                            }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Family Size</label>
                        <input type="number" name="family_size" class="form-control" id="family_size"
                            placeholder="Enter family size">
                        @error('family_size')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Monthly Income</label>
                        <input type="number" name="monthly_income" class="form-control" id="monthly_income"
                            placeholder="Enter monthly income">
                        @error('monthly_income')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>Homeless</label>
                        <input type="text" name="homeless" class="form-control" id="homeless"
                            placeholder="Enter homeless">
                        @error('homeless')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Interpreter</label>
                        <input type="text" name="interpreter" class="form-control" id="interpreter"
                            placeholder="Enter interpreter">
                        @error('interpreter')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="col">
                        <div class="form-group">
                            <label>Migrant/Seasonal</label>
                            <input type="text" name="migrant" class="form-control" id="migrant"
                                placeholder="Enter migrant">
                            @error('migrant')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="col">
                        <div class="form-group">
                            <label>Referral Source</label>
                            <select name="referral_source" class="form-select" id="referral_source">
                                <option value="">Select Referral Source</option>
                                <option value="R1">R1</option>
                            </select>
                            @error('referral_source')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label>VFC</label>
                        <select name="vfc" class="form-select" id="vfc">
                            <option value="">Select VFC</option>
                            <option value="R1">R1</option>
                        </select>
                        @error('vfc')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label>Religion</label>
                        <select name="religion" class="form-select" id="religion">
                            <option value="">Select religion</option>
                            @foreach ($religions as $religion)
                                <option value="{{ $religion->id }}">{{ $religion->name }}</option>
                            @endforeach
                        </select>
                        @error('religion')<span class="text-danger text-sm">{{ $message }}</span>@enderror
                    </div>
                </div>
            </div>

            <button type="submit" id="add_patient" class="btn btn-primary">Submit</button>
            <a href="{{ route('patient.show') }}" class="btn btn-danger">Cancel</a>
        </div>
</div>
</form>
{{-- @endsection --}}