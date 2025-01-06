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
        Schema::table('package_commands', function (Blueprint $table) {
            $table->string('previous_status')->change(); // Change column type to string
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('package_commands', function (Blueprint $table) {
            $table->integer('previous_status')->change(); // Revert column type to integer
        });
    }
};
