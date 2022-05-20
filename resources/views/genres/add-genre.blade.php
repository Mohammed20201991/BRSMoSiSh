@extends('layouts.nav')

@section('content')

<div class="container">
    <div class="fade-in">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header"><h3>Add Genre</h3>
                        <a href="{{route('genre.index')}}" class="btn btn-md btn-primary float-end" style="margin-top: -2rem;">View Genres</a>
                    </div>
                    <div class="card-body">
                        <form action="{{route('genre.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="inputPassword3" class="col-sm-2 col-form-label">Name: <span class="text-danger">*</span></label>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="inputPassword3" name="name" placeholder="Enter Genre Name" autocomplete="name" value="{{old('name')}}" min="3" max="255">
                                    @error('name')<span class="help-block text-danger">{{$message}}</span>@enderror
                                </div>
                            </div>
                            <div class="row mb-3">
                              <label for="inputEmail3" class="col-sm-2 col-form-label">Style</label>
                              <div class="col-sm-6">
                                <select id="inputState" class="form-select" name="style">
                                    <option selected disabled>Select Style</option>
                                    <option value="primary" {{ old('style') == "primary" ? "selected" : "" }}>Primary</option>
                                    <option value="secondary" {{ old('style') == "secondary" ? "selected" : "" }}>Secondary</option>
                                    <option value="success" {{ old('style') == "success" ? "selected" : "" }}>Success</option>
                                    <option value="danger" {{ old('style') == "danger" ? "selected" : "" }}>Danger</option>
                                    <option value="warning" {{ old('style') == "warning" ? "selected" : "" }}>Warning</option>
                                    <option value="info" {{ old('style') == "info" ? "selected" : "" }}>Info</option>
                                    <option value="light" {{ old('style') == "light" ? "selected" : "" }}>Light</option>
                                    <option value="dark" {{ old('style') == "dark" ? "selected" : "" }}>Dark</option>
                                </select>
                                @error('style')<span class="help-block text-danger">{{$message}}</span>@enderror
                              </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Genre</button>
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
