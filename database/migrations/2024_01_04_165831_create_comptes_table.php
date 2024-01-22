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
        Schema::create('comptes', function (Blueprint $table) {
            $table->id();
            $table->string('onm', 50);
            $table->string('prenom', 50);
            $table->string('nom_utilisateur', 50);
            $table->string('email', 200);
            $table->date('date_naissance');
            $table->string('localisation', 100);
            $table->string('password', 200);
            $table->string('io');
            $table->string('mage', 200)->default('./webImg/user.jpg');
            $table->string('cover',)->default('');
            $table->text('binumero', 10)->default('+212');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comptes');
    }
};
