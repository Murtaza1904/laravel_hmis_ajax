<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
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
    ];

}
