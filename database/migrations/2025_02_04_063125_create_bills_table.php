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
        Schema::create('bills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_id')->references('id')->on('colleges');
            $table->string('gst_type')->nullable();
            $table->string('bill_type')->nullable();
            $table->string('course_duration')->nullable();
            $table->string('location')->nullable();
            $table->string('email')->nullable();
            $table->string('gst_number_college')->nullable();
            $table->string('receipt_date')->nullable();
            $table->string('phone')->nullable();
            $table->string('payment_mode')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bills');
    }
};
