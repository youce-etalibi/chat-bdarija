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
        Schema::table('comptes', function (Blueprint $table) {
            $table->boolean('active')->default(true);
            $table->timestamp('activation_date_limite')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comptes', function (Blueprint $table) {
            $table->dropColumn(['active', 'activation_date_limite']);
        });
    }
};
