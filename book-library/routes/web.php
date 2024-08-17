<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

// Public Routes (accessible without login)
Route::get('/', function () {
    return redirect()->route('books.index');
});
Route::resource('books', BookController::class)->only(['index', 'create']);
Route::resource('authors', AuthorController::class)->only(['index', 'create']);

// Protected Routes (require authentication)
Route::middleware(['auth'])->group(function () {
    Route::resource('books', BookController::class)->except(['index', 'create']);
    Route::resource('authors', AuthorController::class)->except(['index', 'create']);
});
Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
