<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BookCategoryController;
use App\Http\Controllers\DonationController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ArticleCategoryController;
use App\Http\Middleware\EnsureLoggedIn;

require __DIR__ . '/BookRoutes.php';
require __DIR__ . '/EventRoutes.php';
require __DIR__ . '/DonationRoutes.php';
require __DIR__ . '/BookRoutes.php';
require __DIR__ . '/UserRoutes.php';
require __DIR__ . '/ArticleRoutes.php';

// Buat user
Route::middleware([EnsureLoggedIn::class])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/user', [HomeController::class, 'user'])->name('home.user');
    Route::get('/search-event-user', [EventController::class, 'searchUser'])->name('event-user.search');
    Route::get('/event-index-user', [EventController::class, 'indexUser'])->name('event-user.all');
    Route::get('/get-event-user/{id}', [EventController::class, 'geteventByIdUser'])->name('event-user.get');
    Route::get('/search-book-user', [BookController::class, 'searchUser'])->name('book-user.search');
    Route::get('/book-index-user', [BookController::class, 'indexUser'])->name('book-user.all');
    Route::get('/get-book-user/{id}', [BookController::class, 'getbookByIdUser'])->name('book-user.get');
    Route::get('/article-index-user', [ArticleController::class, 'indexUser'])->name('article-user.all');
    Route::get('/get-article-user/{id}', [ArticleController::class, 'getArticleByIdUser'])->name('article-user.get');
    Route::get('/search-article-user', [ArticleController::class, 'searchUser'])->name('article-user.search');
    Route::get('/get-book-category-user/{id}', [BookCategoryController::class, 'getCategoryByIdUser'])->name('book-category-user.get');
    Route::get('/get-article-category-user/{id}', [ArticleCategoryController::class, 'getCategoryByIdUser'])->name('article-category-user.get');
    Route::post('/create-article', [ArticleController::class, 'store'])->name('article.create');
    Route::get('/create-article-page', [ArticleController::class, 'create'])->name('article.create-page');
});

// Buat admin
Route::middleware([EnsureLoggedIn::class])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('home.admin');
    Route::get('/search-event-admin', [EventController::class, 'searchAdmin'])->name('event-admin.search');
    Route::get('/event-index-admin', [EventController::class, 'indexAdmin'])->name('event-admin.all');
    Route::get('/get-event-admin/{id}', [EventController::class, 'getEventByIdAdmin'])->name('event-admin.get');
    Route::get('/search-book-admin', [BookController::class, 'searchAdmin'])->name('book-admin.search');
    Route::get('/book-index-admin', [BookController::class, 'indexAdmin'])->name('book-admin.all');
    Route::get('/get-book-admin/{id}', [BookController::class, 'getbookByIdAdmin'])->name('book-admin.get');
    Route::get('/article-index-admin', [ArticleController::class, 'indexAdmin'])->name('article-admin.all');
    Route::get('/get-article-admin/{id}', [ArticleController::class, 'getArticleByIdAdmin'])->name('article-admin.get');
    Route::get('/search-article-admin', [ArticleController::class, 'searchAdmin'])->name('article-admin.search');
    Route::get('/get-book-category-admin/{id}', [BookCategoryController::class, 'getCategoryByIdAdmin'])->name('book-category-admin.get');
    Route::get('/get-article-category-admin/{id}', [ArticleCategoryController::class, 'getCategoryByIdAdmin'])->name('article-category-admin.get');
    Route::post('/create-donation/{id}', [DonationController::class, 'store'])->name('donation.create');
    Route::post('/create-book', [BookController::class, 'store'])->name('book.create');
    Route::get('/create-book-page/{id}', [BookController::class, 'create'])->name('book.create-page');
    Route::get('/donation-index', [DonationController::class, 'index'])->name('donation-admin.all');
    Route::get('/user-index', [UserController::class, 'users'])->name('user-admin.all');
    Route::post('/create-event', [EventController::class, 'store'])->name('event.create');
    Route::get('/create-event-page', [EventController::class, 'create'])->name('event.create-page');
});

// Buat guest
Route::get('/', [HomeController::class, 'guest'])->name('home.guest');
Route::get('/search-event-guest', [EventController::class, 'searchGuest'])->name('event-guest.search');
Route::get('/event-index-guest', [EventController::class, 'indexGuest'])->name('event-guest.all');
Route::get('/get-event-guest/{id}', [EventController::class, 'geteventByIdGuest'])->name('event-guest.get');
Route::get('/search-book-guest', [BookController::class, 'searchGuest'])->name('book-guest.search');
Route::get('/book-index-guest', [BookController::class, 'indexGuest'])->name('book-guest.all');
Route::get('/get-book-guest/{id}', [BookController::class, 'getbookByIdGuest'])->name('book-guest.get');
Route::get('/article-index-guest', [ArticleController::class, 'indexGuest'])->name('article-guest.all');
Route::get('/get-article-guest/{id}', [ArticleController::class, 'getArticleByIdGuest'])->name('article-guest.get');
Route::get('/search-article-guest', [ArticleController::class, 'searchGuest'])->name('article-guest.search');
Route::get('/get-book-category-guest/{id}', [BookCategoryController::class, 'getCategoryByIdGuest'])->name('book-category-guest.get');
Route::get('/get-article-category-guest/{id}', [ArticleCategoryController::class, 'getCategoryByIdGuest'])->name('article-category-guest.get');

