<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('choices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string('provider')->nullable();
            $table->string('referring_provider')->nullable();
            $table->string('pharmacy')->nullable();
            $table->boolean('hipaa_notice_received')->nullable();
            $table->boolean('allow_voice_message')->nullable();
            $table->string('leave_message_with')->nullable();
            $table->boolean('allow_mail_message')->nullable();
            $table->boolean('allow_sms')->nullable();
            $table->boolean('allow_email')->nullable();
            $table->boolean('allow_immunization_registry_use')->nullable();
            $table->boolean('allow_immunization_info_sharing')->nullable();
            $table->boolean('allow_health_information_exchange')->nullable();
            $table->boolean('allow_patient_portal')->nullable();
            $table->string('cms_portal_login')->nullable();
            $table->string('immunization_registry_status')->nullable();
            $table->string('immunization_registry_status_effective_date')->nullable();
            $table->string('publicity_code')->nullable();
            $table->string('publicity_code_effective_date')->nullable();
            $table->boolean('protection_indicator')->nullable();
            $table->string('protection_indicator_effective_date')->nullable();
            $table->string('care_team_provider')->nullable();
            $table->string('care_team_facility')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('choices');
    }
};
