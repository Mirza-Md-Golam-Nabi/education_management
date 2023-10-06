<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->integer('roll_number');
            $table->string('registration_number', 50)->nullable();
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('class_infos');
            $table->string('status', 10);
            $table->date('admission_date')->nullable();
            $table->date('graduation_date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
