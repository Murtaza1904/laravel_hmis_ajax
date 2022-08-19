<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\User;
use App\Models\State;
use App\Models\County;
use App\Models\Country;
use App\Models\Patient;
use App\Models\Language;
use App\Models\Religion;
use Illuminate\Http\Request;
use App\Models\MaritalStatus;
use Illuminate\Support\Facades\Validator;

class PatientController extends Controller
{
    public function index()
    {
        return view('patient.show-list')->with('patients', Patient::all());
    }

    public function create_session()
    {
        if(Request::ajax())
        {
            session(json_decode('data'));
        }
    }

    public function create_identity()
    {
        return view('patient.identity')->with('marital_statuses', MaritalStatus::all());
    }

    public function create_contact()
    {
        return view('patient.contact')
            ->with('countries', Country::all())
            ->with('cities', City::all())
            ->with('states', State::all())
            ->with('counties', County::all());
    }

    public function create_choice()
    {
        return view('patient.choice')
            ->with('users', User::all());
    }

    public function create_employer()
    {
        return view('patient.employer')
            ->with('countries', Country::all())
            ->with('cities', City::all())
            ->with('states', State::all());
    }

    public function create_stats()
    {
        return view('patient.stats')
            ->with('languages', Language::all())
            ->with('religions', Religion::all());
    }

    public function create_guardian()
    {
        return view('patient.guardian')
            ->with('countries', Country::all())
            ->with('cities', City::all())
            ->with('states', State::all());
    }

    public function create_primary_insurance()
    {
        return view('patient.primary-insurance')
            ->with('countries', Country::all())
            ->with('cities', City::all())
            ->with('states', State::all());
    }

    public function create_secondary_insurance()
    {
        return view('patient.secondary-insurance')
            ->with('countries', Country::all())
            ->with('cities', City::all())
            ->with('states', State::all());
    }
    public function create_tertiary_insurance()
    {
        return view('patient.tertiary-insurance')
            ->with('countries', Country::all())
            ->with('cities', City::all())
            ->with('states', State::all());
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
                'firstname' => 'required|max:255',
                'lastname' => 'required|max:255',
                'date_of_birth' => 'required',
                'gender' => 'required|max:255',
                'marital_status' => 'required|max:255',
                'social_security_number' => 'required|max:20',
                'external_id' => 'required|max:20',
                'national_id' => 'required|max:20',
                'user_defined' => 'required|max:255',
                'billing_note' => 'required|max:255',

                /*Contact */
                'address' => 'max:255',
                'country' => 'max:255',
                'city' => 'max:255',
                'state' => 'max:255',
                'postal_code' => 'max:20',
                'county' => 'max:255',
                'mother_name' => 'max:255',
                'emergency_contact' => 'max:20',
                'emergency_phone' => 'max:20',
                'home_phone' => 'max:20',
                'work_phone' => 'max:20',
                'mobile_phone' => 'max:20',
                'contact_email' => 'max:255',
                'trusted_email' => 'max:255',

                /* Choice */
                'provider'=> 'max:255',
                'referring_provider'=> 'max:255',
                'pharmacy'=> 'max:255',
                'hipaa_notice_received' => 'max:1',
                'allow_voice_message' => 'max:1',
                'leave_message_with'=> 'max:255',
                'allow_mail_message' => 'max:1',
                'allow_sms' => 'max:1',
                'allow_email' => 'max:1',
                'allow_immunization_registry_use' => 'max:1',
                'allow_immunization_info_sharing' => 'max:1',
                'allow_health_information_exchange' => 'max:1',
                'allow_patient_portal' => 'max:1',
                'cms_portal_login'=> 'max:255',
                'immunization_registry_status'=> 'max:11',
                'immunization_registry_status_effective_date',
                'publicity_code' => 'max:1',
                'publicity_code_effective_date',
                'protection_indicator' => 'max:1',
                'protection_indicator_effective_date',
                'care_team_provider' => 'max:255',
                'care_team_facility' => 'max:255',

                /*Employer Details*/
                'industry',
                'occupation',
                'employer_name',
                'employer_address',
                'employer_city',
                'employer_state',
                'employer_postal_code',
                'employer_country',

                /*State Details*/
                'language',
                'ethnicity',
                'race',
                'financial_review_date',
                'family_size',
                'monthly_income',
                'homeless',
                'interpreter',
                'migrant',
                'referral_source',
                'vfc',
                'religion',

                /*Guardian Details*/
                'name',
                'relationship',
                'gender',
                'address',
                'city',
                'state',
                'postal_code',
                'country',
                'phone',
                'work_phone',
                'email',

                /*Primary Insurance Details*/
                'primary_primary_insurance_provider',
                'primary_plan_name',
                'primary_subscriber',
                'primary_effective_date',
                'primary_relationship',
                'primary_policy_number',
                'primary_date_of_birth',
                'primary_group_number',
                'primary_social_security_number',
                'primary_subscriber_employer',
                'primary_subscriber_employer_address',
                'primary_subscriber_employer_city',
                'primary_city',
                'primary_subscriber_employer_state',
                'primary_state',
                'primary_subscriber_employer_zipcode',
                'primary_zipcode',
                'primary_subscriber_employer_country',
                'primary_country',
                'primary_subscriber_phone',
                'primary_co_payment',
                'primary_accept_assignment',

                /*Secondary Insurance Details*/
                'secondary_primary_insurance_provider',
                'secondary_plan_name',
                'secondary_subscriber',
                'secondary_effective_date',
                'secondary_relationship',
                'secondary_policy_number',
                'secondary_date_of_birth',
                'secondary_group_number',
                'secondary_social_security_number',
                'secondary_subscriber_employer',
                'secondary_subscriber_employer_address',
                'secondary_subscriber_employer_city',
                'secondary_city',
                'secondary_subscriber_employer_state',
                'secondary_state',
                'secondary_subscriber_employer_zipcode',
                'secondary_zipcode',
                'secondary_subscriber_employer_country',
                'secondary_country',
                'secondary_subscriber_phone',
                'secondary_co_payment',
                'secondary_accept_assignment',

                /*Tertiary Insurance Details*/
                'tertiary_primary_insurance_provider',
                'tertiary_plan_name',
                'tertiary_subscriber',
                'tertiary_effective_date',
                'tertiary_relationship',
                'tertiary_policy_number',
                'tertiary_date_of_birth',
                'tertiary_group_number',
                'tertiary_social_security_number',
                'tertiary_subscriber_employer',
                'tertiary_subscriber_employer_address',
                'tertiary_subscriber_employer_city',
                'tertiary_city',
                'tertiary_subscriber_employer_state',
                'tertiary_state',
                'tertiary_subscriber_employer_zipcode',
                'tertiary_zipcode',
                'tertiary_subscriber_employer_country',
                'tertiary_country',
                'tertiary_subscriber_phone',
                'tertiary_co_payment',
                'tertiary_accept_assignment',

            ]);

        if ($validator->fails()) {
            return response()->json([
                'status'=>400,
                'errors' => $validator->messages(),
            ]);
        }

        else{
            Patient::create($validator->validated());
            return response()->json([
                'status'=> 200,
                'success'=> 'Patient Created Successfully', 
                'url' => url('/patient'), 
            ]);
        }
        // session()->flash('success', 'Patient Created Successfully');
        // return to_route('patient.show');
    }
}
