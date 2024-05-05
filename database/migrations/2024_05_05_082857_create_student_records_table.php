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
        Schema::create('student_records', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->int('academic_year');
            $table->int('semester');
            $table->date('date_enrolled');
            $table->int('tuition_fee');
            $table->int('library_fee');
            $table->int('athletic_fee');
            $table->int('medical_dental_fee');
            $table->int('student_welfare');
            $table->int('cultural_activity');
            $table->int('guidance_fee');
            $table->int('laboratory_fee');
            $table->int('development_fund');
            $table->int('ang_pamantasan_fee');
            $table->int('ssc_fee');
            $table->enum('fee_status', allowed: ['Paid', 'Not yet paid']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_records');
    }
};
