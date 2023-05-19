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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('url', 100);
            $table->integer('count');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('editorial_id');
            $table->unsignedBigInteger('author_id');
            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('editorial_id')->references('id')->on('editorials')->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreign('author_id')->references('id')->on('authors')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
