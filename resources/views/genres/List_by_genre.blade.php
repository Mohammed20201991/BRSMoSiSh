@extends('layouts.nav')

@section('content')
<div class="col-sm-12 col-md-12">
    <div class="container">
      <div class="row">
        <h3 class="mt-5">Lists of all the Books Belonging to Genre :<span> {{$genre->name}}</span></h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">book title</th>
                <th scope="col">author</th>
                <th scope="col">release date</th>
                <th scope="col"> description</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($books as $book)
                    <tr>
                        <th scope="row">{{$loop->index + 1}}</th>
                        <td><a href = "{{route('book.details', $book->id)}}">{{$book->title}} </a></td>
                        <td>{{$book->authors}}</td>
                        <td>{{\Carbon\Carbon::parse($book->released_at)->format('d-M-Y')}}</td>
                        <td>{{$book->description}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
      </div>
    </div>
</div>
@endsection
