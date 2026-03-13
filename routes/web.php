<?php
 
use App\Http\Controllers\BookController;

Route::resource('books', BookController::class);

Route::get('/', function () {
    return redirect()->route('books.index');
});