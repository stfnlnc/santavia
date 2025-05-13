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
        Schema::table('appointments', function (Blueprint $table) {
            $table->string('postal_code')->after('address');
            $table->string('city')->after('address');
            $table->string('status')->after('type')->default('En attente');
            $table->string('person')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('appointments', function (Blueprint $table) {
            $table->dropColumn('postal_code');
            $table->dropColumn('city');
            $table->dropColumn('status');
        });
    }
};
