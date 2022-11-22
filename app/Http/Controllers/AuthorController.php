<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

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
}


