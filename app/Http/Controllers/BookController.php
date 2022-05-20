<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Genre;
use Illuminate\Http\Request;

class BookController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('librarian');
    // }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $books = Book::paginate(15);
        return view('books.index', compact('books'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $genres = Genre::get();
        return view('books.add-book', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'genre_id' => 'required',
            'title' => 'required',
            'authors' => 'required',
            'released_at' => 'required',
            'pages' => 'required',
            // 'isbn' => 'required|unique:books',
            'isbn' => 'required',
            'in_stock' => 'required',
        ]);

        foreach($request->genre_id as $id) {
            // return $id;

            $request->merge(['genre_id' => $id]);

            if($request->cover_image2) {
                $imageName = 'images/books/'.time().uniqid().'.'.$request->cover_image2->extension();
                $request->cover_image2->move(public_path('images/books'), $imageName);
                $request->merge(['cover_image' => $imageName]);
            }

            $book = new Book();
            $book->create($request->except('_token'));
        }

        return redirect()->route('book.index')->with('success','Book Added Successfully');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $book = Book::find($id);
        $genres = Genre::get();
        return view('books.edit-book', compact('book', 'genres'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'genre_id' => 'required',
            'title' => 'required',
            'authors' => 'required',
            'released_at' => 'required',
            'pages' => 'required',
            'isbn' => 'required',
            'in_stock' => 'required',
        ]);

        if($request->cover_image2) {
            $imageName = 'images/books/'.time().$id.'.'.$request->cover_image2->extension();
            $request->cover_image2->move(public_path('images/books'), $imageName);
            $request->merge(['cover_image' => $imageName]);
        }

        $book = Book::find($id);
        $book->update($request->except('_token'));

        return redirect()->route('book.index')->with('success','Book Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $book = Book::find($id);
        $book->delete();

        return redirect()->route('book.index')->with('success','Book Deleted Successfully');
    }
}
