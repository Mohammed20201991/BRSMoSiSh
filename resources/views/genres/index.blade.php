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
                    <div class="card-header"><h3>View Genres</h3>
                        <a href="{{route('genre.create')}}" class="btn btn-md btn-primary float-end" style="margin-top: -2rem;">Add New</a>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead class="table-dark">
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Style</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($genres->count() > 0)
                                @foreach ($genres as $genre)
                                <tr>
                                    <td>{{$loop->index + 1}}</td>
                                    <td>{{$genre->name}}</td>
                                    <td>{{$genre->style}}</td>
                                    <td class="text-center align-middle">
                                        <a href="{{route('genre.edit', $genre->id)}}" title="Edit">
                                            <i class="fa fa-edit text-success"></i>
                                        </a>
                                        <a href="javascript:void(0);" class="delBtn" id="{{$genre->id}}">
                                            <i class="fa fa-trash text-danger"></i>
                                            <form class="formDel-{{$genre->id}}" action="{{ route('genre.destroy',$genre->id) }}" method="post"> @csrf @method('delete') </form>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                No Genres Found
                                @endif
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
