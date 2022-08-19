<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'date_of_birth',
        'gender',
        'marital_status',
        'national_id',
        'social_security_number',
        'external_id',
        'user_defined',
        'billing_note',

        /* Contact Details*/
        'address',
        'country',
        'city',
        'state',
        'postal_code',
        'county',
        'mother_name',
        'emergency_contact',
        'emergency_phone',
        'home_phone',
        'work_phone',
        'mobile_phone',
        'contact_email',
        'trusted_email',

        /*Employer Details*/
        'industry',
        'occupation',
        'employer_name',
        'employer_address',
        'employer_city',
        'employer_state',
        'employer_postal_code',
        'employer_country',

        /*Stats Details*/
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
        'guardian_name',
        'guardian_relationship',
        'guardian_gender',
        'guardian_address',
        'guardian_city',
        'guardian_state',
        'guardian_postal_code',
        'guardian_country',
        'guardian_phone',
        'guardian_work_phone',
        'guardian_email', 

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
    ];

    // public function contacts()
    // {
    //     return $this->belongsTo(Contact::class,'patient_id');
    // }

    public function choices(): HasOne
    {
        return $this->hasOne(Choice::class,'patient_id');
    }

    public function employers(): HasOne
    {
        return $this->hasOne(Employer::class,'patient_id');
    }

    public function stats(): HasOne
    {
        return $this->hasOne(Stats::class,'patient_id');
    }

    public function misc(): HasOne
    {
        return $this->hasOne(Misc::class,'patient_id');
    }

    public function guardians(): HasOne
    {
        return $this->hasOne(Guardian::class,'patient_id');
    }

    public function primary_insurances(): HasOne
    {
        return $this->hasOne(PrimaryInsurance::class,'patient_id');
    }

    public function secondary_insurances(): HasOne
    {
        return $this->hasOne(SecondaryInsurance::class,'patient_id');
    }

    public function tertiary_insurances(): HasOne
    {
        return $this->hasOne(TertiaryInsurance::class,'patient_id');
    }
}

