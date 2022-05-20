@extends('layouts.nav')

@section('content')

<div class="container">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Add Book</h3>
                        <a href="{{route('book.index')}}" class="btn btn-md btn-primary float-end" style="margin-top: -2rem;">View Books</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('book.update', $book->id)}}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('patch')
                            <div class="row mb-3"><label for="inputPassword3" class="col-sm-2 col-form-label">Select Genre: <span class="text-danger">*</span></label>
                                <div class="col-sm-6 d-flex">
                                    @foreach ($genres as $genre)
                                    <div class="form-check pe-2">
                                        <input class="form-check-input" type="checkbox" value="{{$genre->id}}" name="genre_id" id="flexCheckDefault" {{$genre->id == $book->genre_id ? "checked" : ""}}>
                                        <label class="form-check-label" for="flexCheckDefault">
                                        {{$genre->name}}
                                        </label>
                                    </div>
                                    @endforeach
                                    @error('genre_id')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Title: <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputPassword3" name="title" placeholder="Enter Book Title" autocomplete="title" value="{{$book->title}}">
                                    @error('title')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Author: <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputPassword3" name="authors" placeholder="Enter Book Author" autocomplete="authors" value="{{$book->authors}}">
                                    @error('authors')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Description: </label>
                                <div class="col-sm-6">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description" autocomplete="description">{{$book->description}}</textarea>
                                    @error('description')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Released At: <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="date" class="form-control" id="inputPassword3" name="released_at" placeholder="Select Book Release Date" autocomplete="released_at" value="{{$book->released_at}}" max="{{\Carbon\Carbon::parse(\Carbon\Carbon::now())->format('Y-m-d')}}">
                                    @error('released_at')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Pages: <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="inputPassword3" name="pages" placeholder="Enter Book Pages" autocomplete="pages" value="{{$book->pages}}" min="1">
                                    @error('pages')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">ISBN No: <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    {{-- imporatnt I Commeted pattent her because I dont now what exact text should I put but I am sure it will work if you put correct format --}}
                                    {{-- <input type="text" class="form-control" id="inputPassword3" name="isbn" placeholder="Enter ISBN Number" autocomplete="isbn" value="{{$book->isbn}}" pattern="/^(?=(?:\D*\d){10}(?:(?:\D*\d){3})?$)[\d-]+$/i"> --}}
                                    <p> important there is pattern her (regular expression) please see : code in  C:\xampp\htdocs\laravel\brs\resources\views\books\edit-book.blade.php</p>
                                    <input type="text" class="form-control" id="inputPassword3" name="isbn" placeholder="Enter ISBN Number" autocomplete="isbn" value="{{old('isbn')}}" >
                                    @error('isbn')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Stock: <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="number" class="form-control" id="inputPassword3" name="in_stock" placeholder="Enter Book's Stock" autocomplete="in_stock" value="{{$book->in_stock}}" min="0">
                                    @error('in_stock')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Cover Image</label>
                                <div class="col-sm-6">
                                    <input id="file-input" type="file" name="cover_image2">
                                    @if($book->cover_image)
                                    <img src="{{asset($book->cover_image)}}" alt="" width="100">
                                    @endif
                                    @error('cover_image2')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection

@section('javascript')

@endsection
