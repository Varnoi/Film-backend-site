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
        Schema::table('films_genres', function (Blueprint $table) {
            $table->foreign('film_id')->references('id')->on('films')->onDelete('cascade');
            $table->foreign('genre_id')->references('id')->on('genres')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('films_genres', function (Blueprint $table) {
            $table->dropForeign(['film_id']);
            $table->dropForeign(['genre_id']);
        });
    }
};
