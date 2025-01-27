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
        Schema::create('college_course_fee_eligibilities', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_course_fee_id')->references('id')->on('college_course_departments');
            $table->string('fees')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_course_fee_eligibilities');
    }
};
