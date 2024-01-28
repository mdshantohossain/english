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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->string('batch_name')->nullable();
            $table->integer('student_id')->nullable();
            $table->string('class_one')->nullable();
            $table->string('class_two')->nullable();
            $table->string('class_three')->nullable();
            $table->string('class_four')->nullable();
            $table->string('class_five')->nullable();
            $table->string('class_six')->nullable();
            $table->text('date')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
