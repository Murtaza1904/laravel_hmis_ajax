<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    public function up()
    {
        Schema::create('stats', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
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
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('stats');
    }
};
