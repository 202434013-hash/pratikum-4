<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = \App\Models\Book::all();
        return response()->json($books);
    }

    public function show($id)
    {
        $book = \App\Models\Book::find($id);

        if (!$book) {
            return response()->json([
                'message' => 'Book not found'
            ], 404);
        }

        return response()->json($book);
    }
}
