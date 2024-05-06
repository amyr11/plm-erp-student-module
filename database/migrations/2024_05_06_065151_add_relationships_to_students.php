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
        Schema::table('students', function (Blueprint $table) {
            $table->foreignId('degree_program_id')->constrained();
            $table->foreignId('birthplace_city_id')->constrained('cities', 'id');
            $table->foreignId('city_id')->constrained();
            $table->foreignId('biological_sex')->constrained();
            $table->foreignId('civil_status_id')->constrained();
            $table->foreignId('registration_status_id')->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['degree_program_id']);
            $table->dropForeign(['birthplace_city_id']);
            $table->dropForeign(['city_id']);
            $table->dropForeign(['biological_sex']);
            $table->dropForeign(['civil_status_id']);
            $table->dropForeign(['registration_status_id']);
        });
    }
};
