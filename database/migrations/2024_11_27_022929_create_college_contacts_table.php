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
        Schema::create('college_contacts', function (Blueprint $table) {
            $table->id();
            $table->longText('college_address')->nullable();
            $table->string('pincode')->nullable();
            $table->foreignId('college_id')->references('id')->on('colleges');
            $table->foreignId('state_id')->references('id')->on('states');
            $table->foreignId('district_id')->references('id')->on('districts');
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_contacts');
    }
};
