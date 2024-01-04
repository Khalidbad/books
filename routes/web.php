<?php

use Illuminate\Support\Facades\Route;
// routes/web.php

use App\Http\Controllers\BookController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;






/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    //return view('welcome');
    return redirect()->route('books.index');



});
Route::get('/home', function () {
    //return view('welcome');
    return redirect()->route('books.index');


});



Route::get('/books', [BookController::class, 'index']);

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('books', BookController::class);
// web.php

Route::get('/viewCard', [BookController::class, 'viewCard'])->name('viewCard');
// web.php
Route::post('/addToCard/{book}', [BookController::class, 'addToCard'])->name('addToCard');
// web.php

Route::delete('/removeFromCard/{book}', [BookController::class, 'destroy'])->name('removeFromCard');




