<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecondaryInsurance extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'secondary_insurance_provider',
        'plan_name',
        'subscriber',
        'effective_date',
        'relationship',
        'policy_number',
        'date_of_birth',
        'group_number',
        'social_security_number',
        'subscriber_employer',
        'gender',
        'subscriber_employer_address',
        'subscriber_address',
        'subscriber_employer_city',
        'city',
        'subscriber_employer_state',
        'state',
        'subscriber_employer_zipcode',
        'zipcode',
        'subscriber_employer_country',
        'country',
        'subscriber_phone',
        'co_payment',
        'accept_assignment',
    ];

}
