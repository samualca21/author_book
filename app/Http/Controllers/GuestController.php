<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class GuestController extends Controller
{
    public function index() {
        $authors = Author::all();
        $books = Book::all();
        return view('index', compact('authors', 'books'));
    }
}
