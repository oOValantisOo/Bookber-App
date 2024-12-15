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
            $table->id('BookId');
            $table->string('BookTitle');
            $table->string('BookAuthor');
            $table->date('ReleaseDate');
            $table->unsignedBigInteger('BookCategoryId');
            $table->unsignedBigInteger('DonationId');
            $table->foreign('BookCategoryId')->references('BookCategoryId')->on('book_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('DonationId')->references('DonationId')->on('donations')->onDelete('cascade')->onUpdate('cascade');
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
