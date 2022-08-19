<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('misc', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            $table->string('date_deceased')->nullable();
            $table->string('reason_deceased')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('misc');
    }
};
