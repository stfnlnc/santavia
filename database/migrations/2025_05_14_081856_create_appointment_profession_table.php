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
        Schema::create('appointment_profession', function (Blueprint $table) {
            $table->foreignId('appointment_id')->constrained();
            $table->foreignId('profession_id')->constrained();
            $table->primary(['appointment_id', 'profession_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_profession');
    }
};
