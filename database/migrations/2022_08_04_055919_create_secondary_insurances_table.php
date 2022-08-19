<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('secondary_insurances', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string('secondary_insurance_provider')->nullable();
            $table->string('plan_name')->nullable();
            $table->string('subscriber')->nullable();
            $table->string('effective_date')->nullable();
            $table->string('relationship')->nullable();
            $table->string('policy_number')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('group_number')->nullable();
            $table->string('social_security_number')->nullable();
            $table->string('subscriber_employer')->nullable();
            $table->string('gender')->nullable();
            $table->string('subscriber_employer_address')->nullable();
            $table->string('subscriber_address')->nullable();
            $table->string('subscriber_employer_city')->nullable();
            $table->string('city')->nullable();
            $table->string('subscriber_employer_state')->nullable();
            $table->string('state')->nullable();
            $table->string('subscriber_employer_zipcode')->nullable();
            $table->string('zipcode')->nullable();
            $table->string('subscriber_employer_country')->nullable();
            $table->string('country')->nullable();
            $table->string('subscriber_phone')->nullable();
            $table->string('co_payment')->nullable();
            $table->string('accept_assignment')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('secondary_insurances');
    }
};
