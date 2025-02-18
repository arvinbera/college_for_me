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
        Schema::create('college_applications', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_id')->references('id')->on('colleges');
            $table->string('student_name')->nullable();
            $table->string('student_email')->nullable();
            $table->string('phone')->nullable();
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->foreignId('state_id')->references('id')->on('states');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_applications');
    }
};
