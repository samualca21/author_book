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
            'author' => 'string'
        ]);
        $authors_name = ['name' => $data['author']];
        $author = Author::firstOrCreate($authors_name);
        $book = [
            'title' => $data['title'],
            'cover' => $data['cover'],
            'author_id' => $author->id
        ];
        Book::firstOrCreate($book);
        return redirect()->route('books.index');
    }

    public function show(Book $book) {
        return view('book.show', compact('book'));
    }

    public function edit(Book $book) {
        $author = Author::find($book->author_id);
        return view('book.edit', compact('book', 'author'));
    }

    public function update(Book $book) {
        $data = request()->validate([
            'title' => 'string',
            'cover' => 'string',
            'author' => 'string'
        ]);
        $authors_name = ['name' => $data['author']];
        $author = Author::firstOrCreate($authors_name);
        $new_book = [
            'title' => $data['title'],
            'cover' => $data['cover'],
            'author_id' => $author->id
        ];
        $book->update($new_book);
        return redirect()->route('books.show', $book->id);
    }

}
