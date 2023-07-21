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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('fname');
            $table->string('lname');
            $table->string('role')->default(2);
            $table->integer('p_status')->default(0);
            $table->integer('status')->default(0);
            $table->string('service')->default(0);
            $table->string('email')->unique();
            $table->string('phone');
            
            $table->integer('tc');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->string('country');
            
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
