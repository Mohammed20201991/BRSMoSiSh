@extends('layouts.nav')

@section('content')
    <div class="container py-3">
      <div class="list-group">
          <p class="d-flex justify-content-between align-items-center">
            <span class="badge badge-primary badge-pill">Auther or title name</span>
          </p>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item p-1">Machine Learning</li>
            {{-- <li class="list-group-item p-1">Dapibus ac facilisis in</li>
            <li class="list-group-item p-1">Morbi leo risus</li> --}}
          </ul>
        </a>   
        {{-- @endforeach   --}}
        
        <a href="http://127.0.0.1:8000/bookdetails" class="list-group-item list-group-item-action" style="background-color: #ffre3">
          <p class="d-flex justify-content-between align-items-center">
            <span> 
              filename
            </span>
            <span class="badge badge-primary badge-pill">?????</span>
          </p>
          <ul class="list-group list-group-horizontal">
            <li class="list-group-item p-1">book title</li>
            <li class="list-group-item p-1">author</li>
            <li class="list-group-item p-1">date</li>
            <li class="list-group-item p-1">description</li>
          </ul>
        </a>   
      </div>
      <div><br><br><br></div>
      {{-- realted books --}}
      <div class="list-group">
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item p-1"> listing the corresponding books</li>         
        </ul>
      </a>   
      {{-- @endforeach   --}}
      
      <a href="http://127.0.0.1:8000/bookdetails" class="list-group-item list-group-item-action" style="background-color: #ffre3">
        <p class="d-flex justify-content-between align-items-center">
         
          <span class="badge badge-primary badge-pill">?????</span>
        </p>
        <ul class="list-group list-group-horizontal">
          <li class="list-group-item p-1"> 1 </li>
          <li class="list-group-item p-1">book title1</li>
          <li class="list-group-item p-1">author1</li>
          <li class="list-group-item p-1">date1</li>
          <li class="list-group-item p-1">description1</li>
        </ul>

        <ul class="list-group list-group-horizontal">
            <li class="list-group-item p-1"> 2 </li>
            <li class="list-group-item p-1">book title2</li>
            <li class="list-group-item p-1">author2</li>
            <li class="list-group-item p-1">date2</li>
            <li class="list-group-item p-1">description2</li>
          </ul>

          <ul class="list-group list-group-horizontal">
            <li class="list-group-item p-1"> 3 </li>
            <li class="list-group-item p-1">book title3</li>
            <li class="list-group-item p-1">author3</li>
            <li class="list-group-item p-1">date3</li>
            <li class="list-group-item p-1">description3</li>
          </ul>
      </a>   
    </div>
    </div>

    @endsection