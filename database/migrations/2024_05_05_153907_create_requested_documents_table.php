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
        Schema::create('requested_documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('no_of_copies');
            $table->enum('status', allowed: ['Pending', 'Ready'])->default('Pending');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('requested_documents');
    }
};
