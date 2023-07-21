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
        Schema::create('tourist_places', function (Blueprint $table) {
            $table->id();
            $table->integer('g_status')->default(0);
            $table->integer('status')->default(0);
            $table->string('location');
            $table->string('category');
            $table->longText('heading');
            $table->longText('description');
            $table->string('file');
            $table->string('best_time');
            $table->string('district');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tourist_places');
    }
};
