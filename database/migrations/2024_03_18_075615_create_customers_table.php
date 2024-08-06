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
        
        
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable(); // Corrected column name, use underscore instead of space
            $table->string('customer_email')->nullable(); // Changed to string as email addresses are strings
            $table->string('password')->nullable(); // Changed to string, passwords should be stored as strings (hashed)
            $table->string('customer_address')->nullable();
            $table->integer('user_id')->nullable();
            $table->timestamps(); // Adds `created_at` and `updated_at` columns for timestamps
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
