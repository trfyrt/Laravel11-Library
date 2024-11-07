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
        Schema::create('final_year_projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('author');
            $table->string('student_id');
            $table->string('department');
            $table->year('year');
            $table->string('abstract', 1000);
            $table->string('status'); // Status skripsi, misalnya "Lulus", "Ditolak", "Revisi"
            $table->string('grade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('final_year_projects');
    }
};
