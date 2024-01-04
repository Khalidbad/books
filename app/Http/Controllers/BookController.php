<?php


namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;

use Database\Seeders\BooksTableSeeder;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Relations\HasMany;


class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $books = Book::all();
        
        return view('index', compact('books'));
    }
    // BookController.php

  // Make sure to import the User model

public function viewCard()
{
    // Retrieve the authenticated user
    $user = auth()->user();

    // Retrieve books associated with the user
    $booksInCard = $user->books;

    // Return the view with the books
    return view('viewCard', compact('booksInCard'));

}
// BookController.php
public function addToCard(Request $request, Book $book)
{
    // Add the selected book to the user's card
    auth()->user()->books()->attach($book->id);

    return redirect()->route('books.index')->with('success', 'Book added to your card successfully!');
}
public function destroy(Book $book)
{
    // Remove the selected book from the user's card
    auth()->user()->books()->detach($book->id);


    return redirect()->route('viewCard')->with('success', 'Book removed from your card successfully!');
}


    
    
  

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
    }
       

    /**
     * Display the specified resource.
     */
    public function show(Book $book)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Book $book)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Book $book)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    
}
