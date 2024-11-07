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
        Schema::create('news_papers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('publisher');
            $table->date('publicationDate');
            $table->string('editor');
            $table->string('language');
            $table->integer('pageCount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('news_papers');
    }
};