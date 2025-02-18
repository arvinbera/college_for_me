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
        Schema::create('college_lead_remarks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_id')->references('id')->on('colleges');
            $table->foreignId('lead_id')->references('id')->on('all_leads');
            $table->longText('remarks');
            $table->smallInteger('status')->default(0)->comment('0=Untouched,1=Interested,2=Not Interested,3=No Response,4=Admitted,5=AdmittedSD,6=Assigned	');
            $table->foreignId('course_id')->references('id')->on('courses');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_lead_remarks');
    }
};
