<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;
use App\Models\Book;

class AuthorController extends Controller
{
    public function index() {
        $authors = Author::all();
        return view('author.index', compact('authors'));
    }
    public function create() {
        return view('author.create');
    }

    public function store() {
        $authors = Author::all();
        $data = request()->validate([
            'name' => 'string'
        ]);
        // dd($authors);
        // if (!in_array($data['name'], $authors))
        //     dd($data);
        Author::firstOrCreate($data);
        return redirect()->route('authors.index');
    }

    public function show(Author $author) {
        $books = Book::all();
        return view('author.show', compact('author', 'books'));
    }

    public function edit(Author $author) {
        return view('author.edit', compact('author'));
    }

    public function update(Author $author) {
        $data = request()->validate(['name' => 'string']);
        $author->update($data);
        return redirect()->route('authors.show', $author->id);
    }

    public function destroy(Author $author) {
        $books = $author->books;
        foreach ($books as $book)
            $book->delete();
        $author->delete();
        return redirect()->route('authors.index');
    }

}


