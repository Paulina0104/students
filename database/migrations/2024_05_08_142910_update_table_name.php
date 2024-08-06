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
        Schema::table('fsp_details', function (Blueprint $table) {
            //
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('fsp_details', function (Blueprint $table) {
            $table->id()->nullable();
            $table->string('fsp_type'); // Corrected column name, use underscore instead of space
            $table->string('institution_code'); // Changed to string as email addresses are strings
            $table->string('institution_full_name'); // Changed to string, passwords should be stored as strings (hashed)
            $table->string('institution_name');
            $table->timestamps(); // Adds `created_at` and `updated_at` columns for timestamps
            //
        });
    }
};
