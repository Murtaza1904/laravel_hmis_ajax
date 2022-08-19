<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misc extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'date_deceased',
        'reason_deceased',
    ];

}
