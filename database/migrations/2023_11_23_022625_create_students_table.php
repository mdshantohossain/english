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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->integer('student_id');
            $table->string('father_name');
            $table->string('mother_name');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->text('dob');
            $table->bigInteger('nid')->nullable();
            $table->string('blood_group');
            $table->string('gender');
            $table->string('student_type');
            $table->string('batch_name');
            $table->string('payment_method');
            $table->integer('payment_amount');
            $table->integer('due_amount')->nullable();
            $table->text('date');
            $table->string('currency')->default('Tk');
            $table->string('status')->default('Pending');
            $table->string('card_status')->default('Pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
