<?php

namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\Author;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('book.index', compact('books'));
    }

    public function create() {
        $authors = Author::all();
        return view('book.create', compact('authors'));
    }

    public function store() {
        $data = request()->validate([
            'title' => 'string',
            'cover' => 'string',
            'author_id' => 'integer'
        ]);
        Book::firstOrCreate($data);
        return redirect()->route('books.index');
    }

}
