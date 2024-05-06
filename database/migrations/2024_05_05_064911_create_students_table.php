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
            $table->id()->autoIncrement();
            $table->timestamps();
            $table->string('student_no', length: 9)->unique();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('suffix')->nullable();
            $table->enum('biological_sex', allowed: ['Male', 'Female']);
            $table->date('birthdate');
            $table->string('religion');
            $table->enum('civil_status', allowed: ['Single', 'Married', 'Separated', 'Widowed']);
            $table->enum('registration_status', allowed: ['Regular', 'Irregular', 'Dropped', 'Graduated'])->default('Regular');
            $table->date('entry_year');
            $table->integer('year_level');
            $table->date('graduation_date')->nullable();
            $table->string('permanent_address');
            $table->string('plm_email')->unique();
            $table->string('personal_email')->unique();
            $table->string('mobile_no', length: 11)->unique();
            $table->string('telephone_no')->nullable();
            $table->string('photo_link')->nullable();
            $table->string('password');
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
