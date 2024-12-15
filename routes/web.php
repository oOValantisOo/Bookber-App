<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about', function(){
    return view('about');
})->name('about');

require __DIR__ . '/BookRoutes.php';
require __DIR__ . '/EventRoutes.php';
require __DIR__ . '/DonationRoutes.php';
require __DIR__ . '/BookRoutes.php';
require __DIR__ . '/UserRoutes.php';
require __DIR__ . '/ArticleRoutes.php';