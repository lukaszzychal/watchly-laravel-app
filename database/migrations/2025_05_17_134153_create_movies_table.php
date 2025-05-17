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
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable(true);
            $table->string('image')->nullable(true);
            $table->string('video')->nullable(true);
            $table->string('year')->nullable(true);
            $table->string('country')->nullable(true);
            $table->string('duration')->nullable(true);
            $table->string('genre')->nullable(true);
            $table->string('rating')->nullable(true);
            $table->string('slug')->nullable(true);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
