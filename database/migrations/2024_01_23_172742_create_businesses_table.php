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
        Schema::create('businesses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('business_name');
            $table->date('start_date')->nullable();
            $table->string('currency', 50);
            $table->string('logo')->nullable();
            $table->date('website')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('alternate_contact_number')->nullable();
            $table->string('country', 50);
            $table->string('state', 50);
            $table->string('city', 50);
            $table->string('zipcode', 20)->nullable();
            $table->string('landmark', 20)->nullable();
            $table->string('timezone', 40)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('businesses');
    }
};
