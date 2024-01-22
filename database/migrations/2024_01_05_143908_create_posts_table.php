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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->text('body');
            $table->bigInteger('likes')->default(0);
            $table->string('comments', 9999)->default('');
            $table->string('images', 250)->default('');
            $table->unsignedBigInteger('account_id');
            $table->foreign('account_id')->references('id')->on('comptes')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
