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
        Schema::create('bank_account_infos', function (Blueprint $table) {
            $table->id();
            $table->string('bank_name');
            $table->string('branch_name');
            $table->string('account_name');
            $table->string('account_number', 25);
            $table->string('routing_number', 25)->nullable();
            $table->string('account_type', 15)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bank_account_infos');
    }
};
