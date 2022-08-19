<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
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
    ];

}
