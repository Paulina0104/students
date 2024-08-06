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
        Schema::create('students_', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name'); // Corrected column name, use underscore instead of space
            $table->string('customer_email'); // Changed to string as email addresses are strings
            $table->string('password'); // Changed to string, passwords should be stored as strings (hashed)
            $table->string('customer_address');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students_');
    }
};
