<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Borrow;
use App\Models\Genre;
use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $usersCount = User::where('is_librarian', 0)->count();
        $genresCount = Genre::count();
        $booksCount = Book::count();
        $activeRentals = Borrow::where('status', 'ACCEPTED')->count();
        $genres = Genre::get();
        return view('main', compact('usersCount', 'genresCount', 'booksCount', 'activeRentals', 'genres'));
    }

    public function profile() {
        return view('home');
    }

    public function bookDetails($id) {
        $book = Book::find($id);
        $borrowed = Borrow::where('book_id', $book->id)->count();
        return view('books.Bookdetailpage', compact('book', 'borrowed'));
    }

    public function genreBooks($id) {
        $genre = Genre::find($id);
        $books = Book::where('genre_id', $id)->get();
        return view('genres.List_by_genre', compact('books', 'genre'));
    }

    public function search(Request $request) {
        $books = Book::where($request->search_by, 'like', "%{$request->search_text}%")->get();
        return view('books.search_result', compact('books'));
    }
}
