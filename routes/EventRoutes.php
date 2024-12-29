<?php

use App\Http\Controllers\EventController;
use App\Http\Controllers\EventCategoryController;
use Illuminate\Support\Facades\Route;

Route::get('/event-index-guest', [EventController::class, 'indexGuest'])->name('event-guest.all');
Route::post('/create-event', [EventController::class, 'store'])->name('event.create');
Route::get('/create-event-page', [EventController::class, 'create'])->name('event.create-page');
Route::get('/get-event-guest/{id}', [EventController::class, 'geteventByIdGuest'])->name('event-guest.get');
Route::get('/get-event-categories/{id}', [EventController::class, 'geteventsByCategory'])->name('events.category');
Route::get('/search-event', [EventController::class, 'search'])->name('event.search');
Route::put('/update-event/{id}', [EventController::class, 'update'])->name('event.update');
Route::get('/update-event-page/{id}', [EventController::class, 'updatePage'])->name('event.update-page');
Route::delete('/delete-event-event/{id}', [EventController::class, 'delete'])->name('event.delete');

Route::get('/get-event-user/{id}', [EventController::class, 'geteventByIdUser'])->name('event-user.get');
Route::get('/event-index-user', [EventController::class, 'indexUser'])->name('event-user.all');

Route::get('/event-category-index', [EventCategoryController::class, 'index'])->name('event-category.all');
Route::post('/create-event-category', [EventCategoryController::class, 'store'])->name('category.create');
Route::get('/create-event-category-page', [EventCategoryController::class, 'create'])->name('event-category.create-page');
Route::get('/get-event-category/{id}', [EventCategoryController::class, 'getCategoryById'])->name('event-category.get');
Route::get('/get-all-event-categories', [EventCategoryController::class, 'index'])->name('event-categories.getAll');
Route::delete('/delete-event-category/{id}', [EventCategoryController::class, 'deleteCategory'])->name('event-category.delete');
Route::get('/create-event-category', [EventCategoryController::class, 'create'])->name('event-category.createPage');
Route::put('/update-event-category/{id}', [EventCategoryController::class, 'updateCategory'])->name('event-category.update');
Route::get('/update-event-category-page/{id}', [EventCategoryController::class, 'updatePage'])->name('event-category.updatePage');