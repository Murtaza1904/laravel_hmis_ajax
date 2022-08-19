<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Insuranceagent extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'attention',
        'address',
        'country',
        'city',
        'state',
        'zipcode',
        'phone',
        'payer_id',
        'payer_type',
        'x12_partner',
    ];
}
