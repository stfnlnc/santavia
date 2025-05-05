<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('lastname');
            $table->string('firstname');
            $table->string('birth');
            $table->string('email');
            $table->string('phone');
            $table->string('address');
            $table->string('nationality');
            $table->string('travel_date');
            $table->string('start_date');
            $table->string('start_location');
            $table->string('end_location');
            $table->string('way');
            $table->string('duration');
            $table->string('prescription');
            $table->string('services');
            $table->string('type');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
