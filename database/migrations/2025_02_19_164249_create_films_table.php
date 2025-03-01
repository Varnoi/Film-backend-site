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
        Schema::create('films', function (Blueprint $table) {
            $table->id();
            $table->string('title',255);
            $table->text('description')->nullable();
            $table->date('release_date')->nullable();
            $table->integer('duration')->nullable();
            $table->decimal('rating',3,1)->nullable();
            $table->decimal('price',10,2)->nullable();
            $table->string('poster_url',255)->nullable();
            $table->string('trailer_url',255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('films');
    }
};
