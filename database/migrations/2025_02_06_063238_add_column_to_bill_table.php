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
        Schema::table('bills', function (Blueprint $table) {
        $table->decimal('total', 10, 0);
        $table->decimal('recived_amount', 8,2);
        $table->decimal('due_amount', 8,2);
        $table->decimal('cgst', 10, 0);
        $table->decimal('sgst', 10, 0);
        $table->decimal('igst', 10, 0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('bills', function (Blueprint $table) {
            //
        });
    }
};
