@extends('layouts.nav')

@section('content')
<style>
    th {
        padding: 2px;
        font-size: 17px;
    }
    td {
        padding: 5px;
        text-align: left;
        padding-left: 20px;
    }
</style>
<div class="container-fluid">
    <div class="row mt-5">

        @if(Session::has('success'))
            <div class="alert alert-success">{{Session::get('success')}}</div>
        @endif
        <div class="col-4">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    {{-- <img src="https://media.istockphoto.com/vectors/abstract-minimal-geometric-circle-background-for-business-annual-vector-id1210701957?k=20&m=1210701957&s=612x612&w=0&h=FcOUXSrxlHnJztn-U_JSQ0X-VyyUtLKRV4QXSHfprvs=" class="img-thumbnail" alt="..."> --}}
                    <img src= {{$book-> cover_image}} class="img-thumbnail h-100 d-inline-block" alt="Image cover her " >
                </a>
            </div>
        </div>
        <div class="col-6">
            <!-- ISBN number
            Number of this book in the library (in_stock)
            Number of available books (which are not borrowed)
            description
            cover image if it is given -->
            <table class="table table-striped table-hover">
                    <th class="text-primary fs-1">Title:</th>
                    <td class="text-dark fs-1">{{$book->title}}</td>
                </tr>
                <tr>
                    <th class=" text-secondary fs-2 ">Author:</th>
                    <td class="fs-2 text-secondary">{{$book->authors}}</td>
                </tr>
                <tr>
                    <th class=" fs-4">Genre:</th>
                    <td class="fs-4">{{$book->gener->name}}</td>
                </tr>
                <tr>
                    <th class="fs-4">Date of Publish:</th>
                    <td class="fs-4">{{\Carbon\Carbon::parse($book->released_at)->format('d-M-Y')}}</td>
                </tr>
                <tr>
                    <th class="fs-4">No of pages:</th>
                    <td class="fs-4">{{$book->pages}}</td>
                </tr>
                <tr>
                    <th class="fs-4">Short Description:</th>
                    <td class="fs-4">{{$book->description}}</td>
                </tr>
                <tr>
                    <th class="fs-4">Language:</th>
                    <td class="fs-4">{{$book->language_code}}</td>
                </tr>
                <tr>
                    <th class="fs-4">ISBN Number:</th>
                    <td class="fs-5">{{$book->isbn}}</td>
                </tr>
                <tr>
                    <th class="fs-4">Number of books in the library (In Stock):</th>
                    <td class="fs-4">{{$book->in_stock}}</td>
                </tr>
                <tr>
                    <th class="fs-4">Number of Available books (Not borrowed):</th>
                    <td class="fs-4">{{$book->in_stock - $borrowed}}</td>
                </tr>
            </table>
            @if(Auth::check() && Auth::user()->is_librarian == 0)
                @php
                    $myBorrow = \App\Models\Borrow::where('book_id', $book->id)->where('reader_id', Auth::user()->id)->first();
                @endphp
                @if($myBorrow)
                @if($myBorrow->status == "RETURNED")
                <form action="{{route('borrow.book')}}" method="POST">
                    @csrf
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    <input type="hidden" name="reader_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="status" value="PENDING">
                    <button type="submit" class="btn btn-md btn-primary mt-3">Borrow This</button>
                </form>
                @else
                <button type="button" class="btn btn-md mt-3 btn-secondary position-relative">
                    Rental Request:
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                    {{$myBorrow->status}}
                    <span class="visually-hidden">rental status</span>
                    </span>
                </button>
                @endif

                @else
                <form action="{{route('borrow.book')}}" method="POST">
                    @csrf
                    <input type="hidden" name="book_id" value="{{$book->id}}">
                    <input type="hidden" name="reader_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="status" value="PENDING">
                    <button type="submit" class="btn btn-md btn-primary mt-3">Borrow This</button>
                </form>
                @endif
            @endif
      </div>
  </div>

@endsection
