<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin/books', [BookController::class, 'index'])->name('books.index');

Route::get('/admin/books/create', [BookController::class, 'create'])->name('books.create');

Route::post('/admin/books', [BookController::class, 'store'])->name('books.store');

Route::get('/admin/authors', [AuthorController::class, 'index'])->name('authors.index');

Route::get('/admin/authors/create', [AuthorController::class, 'create'])->name('authors.create');

Route::post('/admin/authors', [AuthorController::class, 'store'])->name('authors.store');
