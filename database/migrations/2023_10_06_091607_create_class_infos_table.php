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
        Schema::create('class_infos', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('section', 50)->nullable();
            $table->string('group', 50)->nullable();
            $table->string('student_limit', 5)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('class_infos');
    }
};
