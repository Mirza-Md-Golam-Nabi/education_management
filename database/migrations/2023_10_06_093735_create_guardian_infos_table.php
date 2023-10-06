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
        Schema::create('guardian_infos', function (Blueprint $table) {
            $table->id();
            $table->string('father_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('father_phone', 20)->nullable();
            $table->string('mother_phone', 20)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('guardian_infos');
    }
};
