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
        Schema::create('articles', function (Blueprint $table) {
            $table->id('ArticleId');
            $table->string('ArticleTitle');
            $table->string('ArticleDescription');
            $table->date('PublishDate');
            $table->string('Writer');
            $table->string('ArticleContent');
            $table->unsignedBigInteger('ArticleCategoryId');
            $table->foreign('ArticleCategoryId')->references('ArticleCategoryId')->on('article_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};