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
        Schema::table('movies', function (Blueprint $table) {
            $table->string('release_date')->nullable();
            $table->string('actors')->nullable();
            $table->string('director')->nullable();
            $table->string('writer')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('movies', 'release_date');
        Schema::dropColumns('movies', 'actors');
        Schema::dropColumns('movies', 'director');
        Schema::dropColumns('movies', 'writer');
    }
};
