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
    .rental_heading {
        font-size: 18px;
        font-weight: 550;
    }
</style>
<div class="container-fluid">
    <div class="row mt-5">
        <h2 class="ms-4">Rental Details</h2>
            @if(Session::has('success'))
                <div class="alert alert-success">{{Session::get('success')}}!</div>
            @endif
        <div class="col-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="https://media.springernature.com/w306/springer-static/cover-hires/book/978-3-030-81465-6" class="img-thumbnail" alt="...">
                </a>
            </div>
        </div>
        <div class="col-6">
            <div class="list-group">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item p-1 rental_heading">Book Details</li>
                </ul>
                </a>

                <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
                <ul class="list-group list-group-vertical">
                    <li class="list-group-item p-1"><b>Name: </b> {{$rental->book->title}}</li>
                    <li class="list-group-item p-1"><b>Author: </b> {{$rental->book->authors}}</li>
                    <li class="list-group-item p-1"><b>Release Date: </b> {{\Carbon\Carbon::parse($rental->book->released_at)->format('d-M-Y')}}</li>
                    <li class="list-group-item p-1"><b>View Details: </b> <button class="btn btn-primary btn-sm" onclick="window.open('{{route('book.details', $rental->book->id)}}', '_self');" />Click Me</button></li>
                </ul>
                </a>
            </div>
            <br><br>
            <div class="list-group">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item p-1 rental_heading">Rental Data</li>
                </ul>
                </a>

                <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
                <ul class="list-group list-group-vertical">
                    <li class="list-group-item p-1"><b>Name: </b> {{$rental->reader->name}}</li>
                    <li class="list-group-item p-1"><b>Date of Rental Request: </b> {{\Carbon\Carbon::parse($rental->created_at)->format('d-M-Y')}}</li>
                    <li class="list-group-item p-1"><b>Status: </b> {{$rental->status}}</li>
                    @if($rental->status == "ACCEPTED" || $rental->status == "REJECTED")
                    <li class="list-group-item p-1"><b>Request Process On: </b> {{\Carbon\Carbon::parse($rental->request_processed_at)->format('d-M-Y')}}</li>
                    <li class="list-group-item p-1"><b>Request Managed By Librarian: </b> {{$rental->processed->name}}</li>
                    @elseif($rental->status == "RETURNED")
                    <li class="list-group-item p-1"><b>Return Date: </b> {{\Carbon\Carbon::parse($rental->returned_at)->format('d-M-Y')}}</li>
                    <li class="list-group-item p-1"><b>Request Managed By Librarian: </b> {{$rental->returned->name}}</li>
                    @endif
                    @if(\Carbon\Carbon::parse($rental->deadline)->format('Y-m-d') < \Carbon\Carbon::now()->format('Y-m-d'))
                    <li class="list-group-item p-1"><b>Return Deadline: </b> <span class="text-danger">Your Deadline Passed On {{\Carbon\Carbon::parse($rental->deadline)->format('Y-m-d')}}</span></li>
                    @else
                    <li class="list-group-item p-1"><b>Return Deadline: </b> <span class="text-primary">Rental Return Deadline is {{\Carbon\Carbon::parse($rental->deadline)->format('Y-m-d')}}</span></li>
                    @endif
                </ul>
                </a>
            </div>
            @if(Auth::user()->is_librarian == 1)
            <br><br>
            <div class="list-group">
                <ul class="list-group list-group-horizontal">
                    <li class="list-group-item p-1 rental_heading">Update Rental Request</li>
                </ul>
                </a>

                <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
                    <form action="{{route('update.rental', $rental->id)}}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('patch')
                        <input type="hidden" name="librarian_id" value="{{Auth::user()->id}}">
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-sm-2 col-form-label">Deadline: <span class="text-danger">*</span></label>
                            <div class="col-sm-6">
                                <input type="date" class="form-control" id="inputPassword3" name="deadline" placeholder="Select Rental Deadline" autocomplete="deadline" value="{{$rental->deadline}}" min="{{\Carbon\Carbon::parse(\Carbon\Carbon::now())->format('Y-m-d')}}" {{$rental->status == "PENDING" ? "" : "readonly"}}>
                                @error('deadline')<span class="help-block text-danger">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="row mb-3">
                          <label for="inputEmail3" class="col-sm-2 col-form-label">Rental Status: <span class="text-danger">*</span></label>
                          <div class="col-sm-6">
                            <select id="inputState" class="form-select" name="status">
                                <option selected disabled>Select Status</option>
                                <option value="PENDING" {{ $rental->status == "PENDING" ? "selected" : "" }}>PENDING</option>
                                <option value="ACCEPTED" {{ $rental->status == "ACCEPTED" ? "selected" : "" }}>ACCEPTED</option>
                                <option value="REJECTED" {{ $rental->status == "REJECTED" ? "selected" : "" }}>REJECTED</option>
                                <option value="RETURNED" {{ $rental->status == "RETURNED" ? "selected" : "" }}>RETURNED</option>
                            </select>
                            @error('status')<span class="help-block text-danger">{{$message}}</span>@enderror
                          </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Request</button>
                    </form>
                </a>
            </div>
            @endif
      </div>
  </div>

@endsection
