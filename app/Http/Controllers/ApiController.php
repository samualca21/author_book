<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\Author;

class ApiController extends Controller
{
    public function list() {
        return response()->json(Book::get(), 200);
    }

    public function byId($id) {
        return response()->json(Book::find($id), 200);
    }

    public function update() {
        $data = request()->validate([
            'id' => 'integer',
            'title' => 'string',
            'cover' => 'string',
            'author' => 'string'
        ]);
        $book = Book::findOrFail($data['id']);
        $authors_name = ['name' => $data['author']];
        $author = Author::firstOrCreate($authors_name);
        $new_book = [
            'title' => $data['title'],
            'cover' => $data['cover'],
            'author_id' => $author->id
        ];
        $book->update($new_book);
        return response()->json(Book::find($book->id), 200);
    }

    public function destroy($id) {
        $book = Book::findOrFail($id);
        $book->delete();
    }

}
