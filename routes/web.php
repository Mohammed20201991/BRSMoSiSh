<?php

use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Auth::routes();

Route::get('/', [HomeController::class, 'index'])->name('home');
// Route::get('/contact', [HomeController::class, 'index'])->name('home');
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/admin', [HomeController::class, 'profile'])->name('profile');

Route::get('genre-books/{id}', [HomeController::class, 'genreBooks'])->name('genre.books');
Route::get('book-details/{id}', [HomeController::class, 'bookDetails'])->name('book.details');

Route::get('search', [HomeController::class, 'search'])->name('search');
//librarian routes
Route::middleware('librarian')->prefix('librarian')->group(function (){
    Route::resource('book', BookController::class);
    Route::resource('genre', GenreController::class);
    Route::get('rental-list', [BorrowController::class, 'librarianRentals'])->name('rentals.list');
    Route::get('rental-details/{borrow}', [BorrowController::class, 'show'])->name('rental.details');
    Route::patch('update-rental/{id}', [BorrowController::class, 'update'])->name('update.rental');
});

//reader routes
Route::middleware('reader')->prefix('reader')->group(function (){
    Route::post('borrow-book', [BorrowController::class, 'store'])->name('borrow.book');
    Route::get('my-rentals', [BorrowController::class, 'index'])->name('my.rentals');
    Route::get('my-rental-details/{borrow}', [BorrowController::class, 'show'])->name('my_rental.details');
});
