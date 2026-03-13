<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::latest()->paginate(10);
        return view('books.index', compact('books'));
    }

    public function create()
    {
        return view('books.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'author'=>'required|string|max:255',
            'isbn'=>'required|unique:books',
            'genre'=>'required|string',
            'published_year'=>'required|integer|min:1000|max:'.date('Y'),
            'status'=>'required'
        ]);

        Book::create($request->all());

        return redirect()->route('books.index')
        ->with('success','Book created successfully');
    }

    public function show(Book $book)
    {
        return view('books.show',compact('book'));
    }

    public function edit(Book $book)
    {
        return view('books.edit',compact('book'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'author'=>'required|string|max:255',
            'isbn'=>'required|unique:books,isbn,'.$book->id,
            'genre'=>'required|string',
            'published_year'=>'required|integer|min:1000|max:'.date('Y'),
            'status'=>'required'
        ]);

        $book->update($request->all());

        return redirect()->route('books.index')
        ->with('success','Book updated successfully');
    }

    public function destroy(Book $book)
    {
        $book->delete();

        return redirect()->route('books.index')
        ->with('success','Book deleted successfully');
    }
}