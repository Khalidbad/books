<!-- resources/views/cards/index.blade.php -->

@extends('layout')

@section('content')
    <div class="container">
        <h2>Your Card</h2>

        @forelse($booksInCard as $book)
            <div>
                <!-- Display book information here -->
                {{ $book->title }}
                {{ $book->description }}
                <!-- Add a button to remove the book from the card if needed -->
            </div>
        @empty
            <p>Your card is empty.</p>
        @endforelse
    </div>
@endsection
