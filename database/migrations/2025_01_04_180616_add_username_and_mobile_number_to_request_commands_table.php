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
        Schema::table('request_commands', function (Blueprint $table) {
            $table->string('username')->nullable()->after('id');  // Add 'username' column after 'user_id'
            $table->string('mobile_number')->nullable()->after('username'); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('request_commands', function (Blueprint $table) {
            $table->dropColumn(['username', 'mobile_number']); 
        });
    }
};
