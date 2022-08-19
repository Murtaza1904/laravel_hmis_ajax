@extends('layouts.app')
@section('content')
<div class="card-header pb-0">
    <div id="success"></div>
    <div class="row">
        <div class="col-lg-3">
            <h6 class="text-primary">Patients</h6>
        </div>
        <div class="col-lg-6">
            <div class="input-group">
                <span class="input-group-text text-body"><i class="fas fa-search" aria-hidden="true"></i></span>
                <input type="text" class="form-control" placeholder="Type here..." id='searchbox'>
            </div>
        </div>
        <div class="col-md-2">
            <button class="btn btn-primary" onclick="patient_identity_route()">Add New</button>
        </div>
    </div>
</div>
<div class="card-body px-0 pt-0 pb-2">
    <table class="table align-items-center mb-0">
        <thead>
            <tr>
                <th class="text-uppercase text-center font-weight-bolder opacity-7">#</th>
                <th class="text-uppercase text-center font-weight-bolder opacity-7">Full Name</th>
                <th class="text-uppercase text-center font-weight-bolder opacity-7">Home Phone</th>
                <th class="text-uppercase text-center font-weight-bolder opacity-7">Social Secutiry Number</th>
                <th class="text-uppercase text-center font-weight-bolder opacity-7">Date of Birth</th>
                <th class="text-uppercase text-center font-weight-bolder opacity-7">External ID</th>
            </tr>
        </thead>
        <tbody>

            @forelse ($patients as $patient)
                <tr class="text-center">
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $patient->firstname.$patient->lastname }}</td>
                    <td>{{ $patient->home_phone }}</td>
                    <td>{{ $patient->social_security_number }}</td>
                    <td>{{ $patient->date_of_birth }}</td>
                    <td>{{ $patient->external_id }}</td>

                    @empty

                    <tr class="text-center">
                        <td class="text-danger" colspan="6">No Record Found!</td>
                    </tr>

                </tr>
            @endforelse

        </tbody>
    </table>
</div>
@endsection