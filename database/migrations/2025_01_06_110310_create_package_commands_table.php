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
        Schema::create('package_commands', function (Blueprint $table) {
            $table->id();
            $table->string('username');  // Add 'username' column after 'user_id'
            $table->string('mobile_number'); 
            $table->text('command'); // You can store the user command here
            $table->integer('previous_status');
            $table->integer('status'); // Status of the command, for example 1 for Pending, 2 for Executed
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_commands');
    }
};
