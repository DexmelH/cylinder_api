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
        Schema::create('cylinder_covers', function (Blueprint $table) {
            $table->id();
            $table->string('serial_number')->unique();
            $table->boolean('is_disposed');
            $table->dateTime('disposal_date')->nullable();
            $table->string('storage')->nullable();
            $table->dateTime('date_stored')->nullable();
            $table->string('status');
            $table->smallInteger('cycle');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cylinder_covers');
    }
};
