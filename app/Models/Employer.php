<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employer extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'industry',
        'occupation',
        'employer_name',
        'employer_address',
        'city',
        'state',
        'postal_code',
        'country',
    ];

}
