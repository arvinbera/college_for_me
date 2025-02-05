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
        Schema::create('leadfollowups', function (Blueprint $table) {
            $table->id();
            $table->foreignId('lead_id')->references('id')->on('all_leads');
            $table->foreignId('counselor_id')->references('id')->on('users');
            $table->longText('remarks')->nullable();
            $table->string('course_id')->nullable();
            $table->smallInteger('follow_up_status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leadfollowups');
    }
};
