

@extends('layout')

@section('content')

<div class="container">
    <h2>Book List</h2>

    <div class="row">
        @forelse($books as $book)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ $book->cover_image_path }}" class="card-img-top" alt="{{ $book->title }}">

                    <div class="card-body">
                        <h5 class="card-title">{{ $book->title }}</h5>
                        <p class="card-text">{{ $book->description }}</p>
                        <p class="card-text">Price: ${{ $book->price }}</p>
                        <form action="{{ route('addToCard', ['book' => $book->id]) }}" method="POST">
                            @csrf
                            <button type="submit">Add to Card</button>
                        </form>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <p>No books available.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection
