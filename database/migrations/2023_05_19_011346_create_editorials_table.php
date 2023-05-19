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
        Schema::create('editorials', function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->unsignedBigInteger('gender_id')->nullable();
            $table->unsignedBigInteger('nacionality_id')->nullable();
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('set null')->onUpdate('set null');
            $table->foreign('nacionality_id')->references('id')->on('nacionalities')->onDelete('set null')->onUpdate('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('editorials');
    }
};
