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
        Schema::create('college_claims', function (Blueprint $table) {
            $table->id();
            $table->foreignId('college_id')->references('id')->on('colleges');
            $table->string('name')->nullable();
            $table->string('official_email')->nullable();
            $table->string('phone')->nullable();
            $table->string('designation')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('college_claims');
    }
};
