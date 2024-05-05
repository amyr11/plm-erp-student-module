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
        Schema::create('student_requests', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('student_id')->constrained()->cascadeOnDelete();
            $table->date('date_requested');
            $table->date('date_of_payment');
            $table->enum('payment_mode', allowed: ['Cash', 'Online'])->default('Cash');
            $table->int('amount_paid');
            $table->string('receipt_no');
            $table->string('purpose');
            $table->date('expected_release');
            $table->date('expected_received');
            $table->enum('status', allowed: ['Pending', 'Ready', 'Claimed'])->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_requests');
    }
};
