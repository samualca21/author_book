<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\GuestController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [GuestController::class, 'index'])->name('guest.index');



Route::get('/admin/books', [BookController::class, 'index'])->name('books.index');

Route::get('/admin/books/create', [BookController::class, 'create'])->name('books.create');

Route::post('/admin/books', [BookController::class, 'store'])->name('books.store');

Route::get('/admin/books/{book}', [BookController::class, 'show'])->name('books.show');

Route::get('/admin/books/{book}/edit', [BookController::class, 'edit'])->name('books.edit');

Route::patch('/admin/books/{book}', [BookController::class, 'update'])->name('books.update');

Route::delete('/admin/books/{book}', [BookController::class, 'destroy'])->name('books.destroy');


Route::get('/admin/authors', [AuthorController::class, 'index'])->name('authors.index');

Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('authors.create');

Route::post('/admin/authors', [AuthorController::class, 'store'])->name('authors.store');

Route::get('/admin/authors/{author}', [AuthorController::class, 'show'])->name('authors.show');

Route::get('/admin/authors/{author}/edit', [AuthorController::class, 'edit'])->name('authors.edit');

Route::patch('/admin/authors/{author}', [AuthorController::class, 'update'])->name('authors.update');

Route::delete('/admin/authors/{author}', [AuthorController::class, 'destroy'])->name('authors.destroy');
