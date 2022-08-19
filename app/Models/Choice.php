<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Choice extends Model
{
    use HasFactory;

    protected $fillable = [
        'patient_id',
        'provider',
        'referring_provider',
        'pharmacy',
        'hipaa_notice_received',
        'allow_voice_message',
        'leave_message_with',
        'allow_mail_message',
        'allow_sms',
        'allow_email',
        'allow_immunization_registry_use',
        'allow_immunization_info_sharing',
        'allow_health_information_exchange',
        'allow_patient_portal',
        'cms_portal_login',
        'immunization_registry_status',
        'immunization_registry_status_effective_date',
        'publicity_code',
        'publicity_code_effective_date',
        'protection_indicator',
        'protection_indicator_effective_date',
        'care_team_provider',
        'care_team_facility',
    ];

}
