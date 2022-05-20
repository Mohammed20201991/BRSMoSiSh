@extends('layouts.nav')

@section('content')
<style>
    .rental_heading {
        font-size: 20px;
        font-weight: 600;
    }
</style>
    <div class="container py-3">

        <div class="list-group">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-1 rental_heading">Search Results </li>
            </ul>
            </a>

            <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
                <p class="d-flex justify-content-between align-items-center">
                    <span>
                      {{$books->count()}} results found against your query!
                    </span>
                  </p>
            <table class="table">
                <thead class="table-dark">
                    <tr>
                        <th>Sr#</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Date of Rental</th>
                        <th>Deadline</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @if($books->count() > 0)
                    @foreach ($books as $book)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$book->title}}</td>
                        <td>{{$book->authors}}</td>
                        <td>{{\Carbon\Carbon::parse($book->released_at)->format('d-M-Y')}}</td>
                        <td>{{$book->description}}</td>
                        <td><a href="{{route('book.details', $book->id)}}" class="btn btn-sm btn-primary">View Details</a></td>
                    </tr>
                    @endforeach
                    @else
                    No Books Found Related to Your Keywords.
                    @endif
                </tbody>
            </table>
            </a>
        </div>
        <br><br>

    </div>

@endsection
