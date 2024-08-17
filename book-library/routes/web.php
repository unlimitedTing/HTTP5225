<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

Route::get('/', function () {
    return redirect()->route('books.index');
});

// Books Resource Routes
Route::resource('books', BookController::class);

// Authors Resource Routes
Route::resource('authors', AuthorController::class);

