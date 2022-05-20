@extends('layouts.nav')

@section('content')
<style>
    a {
        text-decoration: none;
    }
</style>
<div class="container py-3">
    <div class="fade-in">
        <div class="row">
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}!</div>
            @endif
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>View Books</h3>
                        <a href="{{route('book.create')}}" class="btn btn-md btn-primary float-end" style="margin-top: -2rem;">Add New</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-success text-secondary">
                                <tr>
                                    <th>#</th>
                                    <th>Book Title</th>
                                    <th>Author</th>
                                    <th>Release Date</th>
                                    <th>Stock</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody class="">
                                @if($books->count() > 0)
                                @foreach ($books as $book)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$book->title}}</td>
                                    <td>{{$book->authors}}</td>
                                    <td>{{\Carbon\Carbon::parse($book->released_at)->format('d-M-Y')}}</td>
                                    <td>{{$book->in_stock}}</td>
                                    <td class="text-center align-middle">
                                        <a href="{{route('book.edit', $book->id)}}" title="Edit">
                                            <i class="fa fa-edit text-success"></i>
                                        </a>
                                        <a href="{{route('book.details', $book->id)}}" title="Details">
                                            <i class="fa fa-eye" aria-hidden="true"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="delBtn" id="{{$book->id}}">
                                            <i class="fa fa-trash text-danger"></i>
                                            <form class="formDel-{{$book->id}}" action="{{ route('book.destroy',$book->id) }}" method="post"> @csrf @method('delete') </form>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                No Books Found
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>
@endsection
