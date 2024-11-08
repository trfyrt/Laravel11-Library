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
        Schema::create('cds', function (Blueprint $table) {
            $table->id();
            $table->string('title'); // Judul film
            $table->string('producer'); // Nama produser
            $table->string('genre'); // Genre film, misalnya "Drama", "Aksi", "Komedi"
            $table->year('year'); // Tahun rilis film
            $table->integer('duration'); // Durasi film dalam menit
            $table->string('studio'); // Studio produksi film
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cds');
    }
};
