<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

Route::get('/', [BookController::class, 'index']);
Route::get('/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');
Route::put('/books/{book}',       [BookController::class, 'update'])->name('books.update');