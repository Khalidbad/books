<?php

// UserController.php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function viewCard()
    {
        $user = auth()->user();
        $booksInCard = $user->books;

        return view('cards.index', compact('booksInCard'));
    }
}

