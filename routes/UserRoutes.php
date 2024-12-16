<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', [UserController::class, 'homeGuest']) ->name('guest.home');
Route::get('/home', [UserController::class, 'homeUser']) ->name('user.home');

Route::get('/profile', [UserController::class, 'profile']) ->name('user.profile');

Route::get('/updateProfile', [UserController::class, 'updateProfile']) ->name('user.update_profile');

Route::get('/auth/google', [UserController::class, 'googlepage'])->name('google.page');
Route::get('/auth/google/callback', [UserController::class, 'googlecallback'])->name('google.callback');

Route::get('/new-password/{token}', [UserController::class, 'resetPassword'])->name('new-password');
Route::post('/resetPassword', [UserController::class, 'resetPasswordPost']) ->name('resetPassword.post');

Route::get('/forgetPassword', [UserController::class, 'forgetPassword']) ->name('forgetPassword');
Route::post('/forgetPassword', [UserController::class, 'forgetPasswordPost']) ->name('forgetPassword.post'); 

Route::get('/login', [UserController::class, 'login']) ->name('login');
Route::post('/login', [UserController::class, 'loginPost']) ->name('login.post'); 

Route::get('/registerNotif', [UserController::class, 'registerNotif'])->name('registerNotif');
Route::get('/register', [UserController::class, 'register'])->name('register');
Route::post('/register', [UserController::class, 'registerPost']) ->name('register.post'); 