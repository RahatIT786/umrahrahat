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
        Schema::table('user_visa_enquiries', function (Blueprint $table) {
            // Add the new 'status' column (e.g., it could be an integer or string, depending on your needs)
            $table->string('status'); // Default value can be 'pending' or anything else
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('user_visa_enquiries', function (Blueprint $table) {
            $table->dropColumn('status');
        });
    }
};
