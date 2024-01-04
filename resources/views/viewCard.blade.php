<!-- cards/index.blade.php -->



    @extends('layout')  {{-- Assuming you have a layout file --}}

    @section('content')
    <h1>Your Book Card</h1>

        @if ($booksInCard->isEmpty())
            <p>No books in your card.</p>
        @else
            <div class="row">
                @foreach ($booksInCard as $book)
                    <div class="col-md-4 mb-3">
                        <div class="card">
                            <img src="{{ asset($book->cover_image_path) }}" class="card-img-top" alt="{{ $book->title }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $book->title }}</h5>
                                <p class="card-text">{{ $book->description }}</p>
                                <a href="#" class="btn btn-primary">Read More</a>
                                <form action="{{ route('removeFromCard', ['book' => $book->id]) }}" method="POST" class="mt-2">

                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Remove from Card</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endsection
    