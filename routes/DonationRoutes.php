<?php

use App\Http\Controllers\DonationController;
use Illuminate\Support\Facades\Route;

Route::get('/donation-index', [DonationController::class, 'index'])->name('donation.all');
Route::post('/create-donation', [DonationController::class, 'store'])->name('donation.create');
Route::get('/create-donation-page', [DonationController::class, 'create'])->name('donation.create-page');
Route::get('/get-donation/{id}', [DonationController::class, 'getdonationById'])->name('donation.get');
Route::get('/get-donation-categories/{id}', [DonationController::class, 'getdonationsByCategory'])->name('donations.category');
Route::get('/search-donation', [DonationController::class, 'search'])->name('donation.search');
Route::put('/update-donation/{id}', [DonationController::class, 'update'])->name('donation.update');
Route::get('/update-donation-page/{id}', [DonationController::class, 'updatePage'])->name('donation.update-page');
Route::delete('/delete-donation-donation/{id}', [DonationController::class, 'delete'])->name('donation.delete');