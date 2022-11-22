<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class ApiController extends Controller
{
    public function list() {
        return response()->json(Book::get(), 200);
    }

    public function byId($id) {
        return response()->json(Book::find($id), 200);
    }

    public function update() {
        $data = request()->json();
        dd($data);
    }

}
