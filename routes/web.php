<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Middleware\EnsureLoggedIn;

require __DIR__ . '/BookRoutes.php';
require __DIR__ . '/EventRoutes.php';
require __DIR__ . '/DonationRoutes.php';
require __DIR__ . '/BookRoutes.php';
require __DIR__ . '/UserRoutes.php';
require __DIR__ . '/ArticleRoutes.php';

Route::middleware([EnsureLoggedIn::class])->group(function () {
    Route::get('/profile', [UserController::class, 'profile'])->name('profile');
    Route::get('/user', [HomeController::class, 'user'])->name('home.user');
});

Route::middleware([EnsureLoggedIn::class])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin'])->name('home.admin');
});

Route::get('/', [HomeController::class, 'guest'])->name('home.guest');

