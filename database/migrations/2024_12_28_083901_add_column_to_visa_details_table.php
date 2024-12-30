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
        Schema::table('visa_details', function (Blueprint $table) {
            // Add the new column to the table
            $table->string('delete_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('visa_details', function (Blueprint $table) {
            // Drop the column in case of rollback
            $table->dropColumn('delete_status');
        });
    }
};
