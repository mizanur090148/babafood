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
        Schema::create('third_parties', function (Blueprint $table) {
            $table->id();
            $table->string('prefix', 5)->nullable();
            $table->string('firstname', 30);
            $table->string('lastname', 30)->nullable();
            $table->string('username', 50)->nullable();
            $table->string('email', 50)->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('third_parties');
    }
};
