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
        Schema::table('Movies', function (Blueprint $table) {
            $table->jsonb('actors')->change();
            $table->jsonb('genre')->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('Movies', function (Blueprint $table) {
            $table->string('actors')->change();
            $table->string('genre')->change();
        });
    }
};
