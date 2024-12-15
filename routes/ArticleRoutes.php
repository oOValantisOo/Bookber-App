<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/article-index', [ArticleController::class, 'index'])->name('article.all');
Route::post('/create-article', [ArticleController::class, 'store'])->name('article.create');
Route::get('/create-article-page', [ArticleController::class, 'create'])->name('article.create-page');
Route::get('/get-article/{id}', [ArticleController::class, 'getArticleById'])->name('article.get');
Route::get('/get-article-categories/{id}', [ArticleController::class, 'getArticlesByCategory'])->name('articles.category');
Route::get('/search-article', [ArticleController::class, 'search'])->name('article.search');
Route::put('/update-article/{id}', [ArticleController::class, 'update'])->name('article.update');
Route::get('/update-article-page/{id}', [ArticleController::class, 'updatePage'])->name('article.update-page');
Route::delete('/delete-article-article/{id}', [ArticleCategory::class, 'delete'])->name('article.delete');

Route::get('/article-index', [ArticleCategoryController::class, 'index'])->name('article-category.all');
Route::post('/create-article-category', [ArticleCategoryController::class, 'store'])->name('category.create');
Route::get('/create-article-category-page', [ArticleCategoryController::class, 'create'])->name('article-category.create-page');
Route::get('/get-article-category/{id}', [ArticleCategoryController::class, 'getCategoryById'])->name('article-category.get');
Route::get('/get-all-article-categories', [ArticleCategoryController::class, 'index'])->name('article-categories.getAll');
Route::delete('/delete-article-category/{id}', [ArticleCategoryController::class, 'deleteCategory'])->name('article-category.delete');
Route::get('/create-article-category', [ArticleCategoryController::class, 'create'])->name('article-category.createPage');
Route::put('/update-article-category/{id}', [ArticleCategoryController::class, 'updateCategory'])->name('article-category.update');
Route::get('/update-article-category-page/{id}', [ArticleCategoryController::class, 'updatePage'])->name('article-category.updatePage');