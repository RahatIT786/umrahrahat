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
        Schema::create('packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name');
            $table->text('description');
            $table->integer('sharing');
            $table->integer('quint');
            $table->integer('quad');
            $table->integer('triple');
            $table->integer('double');
            $table->integer('single');
            $table->string('months');
            $table->json('wednesday_dates');
            $table->longText('note');
            $table->longText('includes');
            $table->string('photo_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packages');
    }
};
