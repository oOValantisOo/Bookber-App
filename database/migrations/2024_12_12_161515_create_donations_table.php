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
        Schema::create('donations', function (Blueprint $table) {
            $table->id('DonationId');
            $table->date('DonationDate');
            $table->unsignedBigInteger('UserId');
            $table->unsignedBigInteger('EventId');
            $table->foreign('UserId')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('EventId')->references('EventId')->on('events')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('donations');
    }
};
