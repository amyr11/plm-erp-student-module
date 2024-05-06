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
        Schema::table('degree_programs', function (Blueprint $table) {
            $table->foreignId('college_id')->constrained();
            $table->foreignId('degree_id')->constrained()->cascadeOnDelete();
            $table->foreignId('program_id')->constrained()->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('degree_programs', function (Blueprint $table) {
            $table->dropForeign(['college_id']);
            $table->dropForeign(['degree_id']);
            $table->dropForeign(['program_id']);
        });
    }
};
