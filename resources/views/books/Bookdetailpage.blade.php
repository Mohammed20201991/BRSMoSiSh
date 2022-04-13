@extends('layouts.nav')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-3">         
            <!-- <div class="container-fluid"> -->
                <a class="navbar-brand" href="#">
                    <img src="https://media.springernature.com/w306/springer-static/cover-hires/book/978-3-030-81465-6" class="img-thumbnail" alt="...">      
                </a>
            <!-- </div>  -->
        </div>
        <div class="col-4">
            



<!-- ISBN number
Number of this book in the library (in_stock)
Number of available books (which are not borrowed)
description
cover image if it is given -->
                <h1> <p class="fs-1 mt-5"> Title  : <span> Story Book</span> </p></h1>
                <h2 class="mt-3">Author:  <span> John Doe Book</span>    </h2> 
                <h3 class="mt-3"> Genre : <span> English Book</span></h3>
                <h4 class="mt-3">date of publish : <span> 2002</span></h4>
                <h5 class="mt-3">number of pages : <span> 765</span></h5>
                <h5 class="mt-3">ISBN number : <span> 12345</span></h5>
                <h5 class="mt-3"> Number of this book in the library (in_stock) : <span> 200</span></h5>
                <h5 class="mt-3">Number of available books (which are not borrowed) : <span> 33333</span></h5>
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 100px">description : </textarea>
                   
                  </div>
                <h5 class="mt-3">language : <span> Arabic</span></h5>

        </div>
        <div class="col">
          
        </div>
      </div>
      <div class="row">
        <div class="col">
          <!-- 1 of 3 -->
        </div>
        <div class="col-5">
          <!-- 2 of 3 (wider) -->
        </div>
        <div class="col">
          <!-- 3 of 3 -->
        </div>
      </div>
  </div>

@endsection