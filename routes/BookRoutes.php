<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BookCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/book-index', [BookController::class, 'index'])->name('book.all');
Route::post('/create-book', [BookController::class, 'store'])->name('book.create');
Route::get('/create-book-page', [BookController::class, 'create'])->name('book.create-page');
Route::get('/get-book/{id}', [BookController::class, 'getbookById'])->name('book.get');
Route::get('/get-book-categories/{id}', [BookController::class, 'getbooksByCategory'])->name('books.category');
Route::get('/search-book', [BookController::class, 'search'])->name('book.search');
Route::put('/update-book/{id}', [bookController::class, 'update'])->name('book.update');
Route::get('/update-book-page/{id}', [BookController::class, 'updatePage'])->name('book.update-page');
Route::delete('/delete-book-book/{id}', [BookController::class, 'delete'])->name('book.delete');

Route::get('/book-index', [BookCategoryController::class, 'index'])->name('book-category.all');
Route::post('/create-book-category', [BookCategoryController::class, 'store'])->name('category.create');
Route::get('/create-book-category-page', [BookCategoryController::class, 'create'])->name('book-category.create-page');
Route::get('/get-book-category/{id}', [BookCategoryController::class, 'getCategoryById'])->name('book-category.get');
Route::get('/get-all-book-categories', [BookCategoryController::class, 'index'])->name('book-categories.getAll');
Route::delete('/delete-book-category/{id}', [BookCategoryController::class, 'deleteCategory'])->name('book-category.delete');
Route::get('/create-book-category', [BookCategoryController::class, 'create'])->name('book-category.createPage');
Route::put('/update-book-category/{id}', [BookCategoryController::class, 'updateCategory'])->name('book-category.update');
Route::get('/update-book-category-page/{id}', [BookCategoryController::class, 'updatePage'])->name('book-category.updatePage');