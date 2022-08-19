<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->id('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->date('date_of_birth');
            $table->string('gender');
            $table->string('marital_status');
            $table->bigInteger('national_id');
            $table->bigInteger('social_security_number');
            $table->bigInteger('external_id');
            $table->text('user_defined');
            $table->text('billing_note');

            /*Contact Details */
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->bigInteger('postal_code')->nullable();
            $table->string('country')->nullable();
            $table->string('county')->nullable();
            $table->string('mother_name')->nullable();
            $table->bigInteger('emergency_contact')->nullable();
            $table->bigInteger('emergency_phone')->nullable();
            $table->bigInteger('home_phone')->nullable();
            $table->bigInteger('work_phone')->nullable();
            $table->bigInteger('mobile_phone')->nullable();
            $table->string('contact_email')->nullable();
            $table->string('trusted_email')->nullable();

            /*Choice Details*/
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

            /*Employer Details*/
            $table->string('industry')->nullable();
            $table->string('occupation')->nullable();
            $table->string('employer_name')->nullable();
            $table->string('employer_address')->nullable();
            $table->string('employer_city')->nullable();
            $table->string('employer_state')->nullable();
            $table->integer('employer_postal_code')->nullable();
            $table->string('employer_country')->nullable();

            /*Stats Details*/
            $table->string('language')->nullable();
            $table->string('ethnicity')->nullable();
            $table->string('race')->nullable();
            $table->string('financial_review_date')->nullable();
            $table->string('family_size')->nullable();
            $table->string('monthly_income')->nullable();
            $table->string('homeless')->nullable();
            $table->string('interpreter')->nullable();
            $table->string('migrant')->nullable();
            $table->string('referral_source')->nullable();
            $table->string('vfc')->nullable();
            $table->string('religion')->nullable();

            /*Guardian Details*/
            $table->string('guardian_name')->nullable();
            $table->string('guardian_relationship')->nullable();
            $table->string('guardian_gender')->nullable();
            $table->string('guardian_address')->nullable();
            $table->string('guardian_city')->nullable();
            $table->string('guardian_state')->nullable();
            $table->string('guardian_postal_code')->nullable();
            $table->string('guardian_country')->nullable();
            $table->string('guardian_phone')->nullable();
            $table->string('guardian_work_phone')->nullable();
            $table->string('guardian_email')->nullable();

            /*Primary Insurance Details*/
            $table->string('primary_primary_insurance_provider')->nullable();
            $table->string('primary_plan_name')->nullable();
            $table->string('primary_subscriber')->nullable();
            $table->string('primary_effective_date')->nullable();
            $table->string('primary_relationship')->nullable();
            $table->string('primary_policy_number')->nullable();
            $table->string('primary_date_of_birth')->nullable();
            $table->string('primary_group_number')->nullable();
            $table->string('primary_social_security_number')->nullable();
            $table->string('primary_subscriber_employer')->nullable();
            $table->string('primary_subscriber_employer_address')->nullable();
            $table->string('primary_subscriber_address')->nullable();
            $table->string('primary_subscriber_employer_city')->nullable();
            $table->string('primary_city')->nullable();
            $table->string('primary_subscriber_employer_state')->nullable();
            $table->string('primary_state')->nullable();
            $table->string('primary_subscriber_employer_zipcode')->nullable();
            $table->string('primary_zipcode')->nullable();
            $table->string('primary_subscriber_employer_country')->nullable();
            $table->string('primary_country')->nullable();
            $table->string('primary_subscriber_phone')->nullable();
            $table->string('primary_co_payment')->nullable();
            $table->string('primary_accept_assignment')->nullable();

            /*Secondary Insurance Details*/
            $table->string('secondary_primary_insurance_provider')->nullable();
            $table->string('secondary_plan_name')->nullable();
            $table->string('secondary_subscriber')->nullable();
            $table->string('secondary_effective_date')->nullable();
            $table->string('secondary_relationship')->nullable();
            $table->string('secondary_policy_number')->nullable();
            $table->string('secondary_date_of_birth')->nullable();
            $table->string('secondary_group_number')->nullable();
            $table->string('secondary_social_security_number')->nullable();
            $table->string('secondary_subscriber_employer')->nullable();
            $table->string('secondary_subscriber_employer_address')->nullable();
            $table->string('secondary_subscriber_address')->nullable();
            $table->string('secondary_subscriber_employer_city')->nullable();
            $table->string('secondary_city')->nullable();
            $table->string('secondary_subscriber_employer_state')->nullable();
            $table->string('secondary_state')->nullable();
            $table->string('secondary_subscriber_employer_zipcode')->nullable();
            $table->string('secondary_zipcode')->nullable();
            $table->string('secondary_subscriber_employer_country')->nullable();
            $table->string('secondary_country')->nullable();
            $table->string('secondary_subscriber_phone')->nullable();
            $table->string('secondary_co_payment')->nullable();
            $table->string('secondary_accept_assignment')->nullable();

            /*Tertiary Insurance Details*/
            $table->string('tertiary_primary_insurance_provider')->nullable();
            $table->string('tertiary_plan_name')->nullable();
            $table->string('tertiary_subscriber')->nullable();
            $table->string('tertiary_effective_date')->nullable();
            $table->string('tertiary_relationship')->nullable();
            $table->string('tertiary_policy_number')->nullable();
            $table->string('tertiary_date_of_birth')->nullable();
            $table->string('tertiary_group_number')->nullable();
            $table->string('tertiary_social_security_number')->nullable();
            $table->string('tertiary_subscriber_employer')->nullable();
            $table->string('tertiary_subscriber_employer_address')->nullable();
            $table->string('tertiary_subscriber_address')->nullable();
            $table->string('tertiary_subscriber_employer_city')->nullable();
            $table->string('tertiary_city')->nullable();
            $table->string('tertiary_subscriber_employer_state')->nullable();
            $table->string('tertiary_state')->nullable();
            $table->string('tertiary_subscriber_employer_zipcode')->nullable();
            $table->string('tertiary_zipcode')->nullable();
            $table->string('tertiary_subscriber_employer_country')->nullable();
            $table->string('tertiary_country')->nullable();
            $table->string('tertiary_subscriber_phone')->nullable();
            $table->string('tertiary_co_payment')->nullable();
            $table->string('tertiary_accept_assignment')->nullable();



            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('patients');
    }
};
