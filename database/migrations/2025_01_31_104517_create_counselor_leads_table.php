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
        Schema::create('counselor_leads', function (Blueprint $table) {
            $table->id();
            $table->foreignId('counselor_id')->references('id')->on('users');
            $table->foreignId('lead_id')->references('id')->on('all_leads');
            $table->smallInteger('status')->default(0);
            $table->smallInteger('is_active')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('counselor_leads');
    }
};
