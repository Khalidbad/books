<?php


namespace App\Http\Controllers;

use App\Models\Book;
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
    
    public function addToCard(Request $request, Book $book)
    {
        // Add the selected book to the user's card
        auth()->user()->boo()->attach($book->id);

        return redirect()->route('books.index')->with('success', 'Book added to your card successfully!');
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
        //
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
    public function destroy(Book $book)
    {
        //
    }
}
