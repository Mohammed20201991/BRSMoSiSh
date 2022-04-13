@extends('layouts.nav')

@section('content')
<div class="jumbotron">
      <div class="container">
          {{-- FILTER STRING SEARCH BY OTHER OR TITLE  --}}
        {{-- <div class="row">
            <link href="\css\search-filter.css" rel="stylesheet">
            <div class="container">
                <div class="row searchFilter" >
                   <div class="col-sm-12" >
                       <h3>Search for books by author or title,</h3>
                    <div class="input-group" >
                     <input id="table_filter" type="text" class="form-control" aria-label="Text input with segmented button dropdown" >
                     <div class="input-group-btn" >
                      <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Category</span> <span class="caret" >&nbsp;</span></button>
                      <div class="dropdown-menu dropdown-menu-right" >
                         <ul class="category_filters" >
                          <li >
                           <input class="cat_type category-input" data-label="All" id="all" value="" name="radios" type="radio" ><label for="all" ><a href ="http://127.0.0.1:8000/show">title </a></label>
                          </li>
                          <li >
                           <input type="radio" name="radios" id="Design" value="Design" ><label class="category-label" for="Design" ><a href ="http://127.0.0.1:8000/show">author</a></label>
                          </li>              
                         </ul>
                      </div>
                      <button id="searchBtn" type="button" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
                     </div>
                    </div>
                   </div>
                </div>
              </div>
        </div> --}}

        {{-- @extends('layouts.search')
        @section('content')
        @endsection --}}
        {{-- End of search part --}}
        <div class="row">
  
          <div class="col-sm-3 my-3">
            <div class="card h-100">
              <img src="https://cdn.pixabay.com/photo/2015/10/05/22/37/blank-profile-picture-973460__340.png" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Number of Users</h5>
                <h5 class="card-title">22</h5>
              </div>
            </div>
          </div>
          
          <div class="col-sm-3 my-3">
            <div class="card h-100">
              <img src="https://assets.ltkcontent.com/images/31018/book-genres_0066f46bde.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Number of Gener</h5>
                <h5 class="card-title">22</h5>

              </div>
            </div>
          </div>
          
          <div class="col-sm-3 my-3">
            <div class="card h-100">
              <img src="https://miro.medium.com/max/1400/1*YDR3yjZH_z1nJpsrvcerMQ.png" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">Number of Books</h5>
                <h5 class="card-title">22</h5>

              </div>
            </div>
          </div>
          
          <div class="col-sm-3 my-3">
            <div class="card h-100">
              <img src="https://preschooltoolkit.com/assets/Uploads/counting-book-preschool-math-activity.jpg" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">No.Active Books rental (in accepted status)</h5>
                <h5 class="card-title">22</h5>

              </div>
            </div>
          </div> 
  
        </div>

        <div class="row">

            <div class="col-sm-6 my-6">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title">List of Geners</h5>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item"><a href="http://127.0.0.1:8000/listbygenre"> English </a></li>
                        <li class="list-group-item"><a href="http://127.0.0.1:8000/listbygenre"> Maths </a></li>
                        <li class="list-group-item"><a href="http://127.0.0.1:8000/listbygenre"> Computer Since</a></li>
                        <li class="list-group-item"><a href="http://127.0.0.1:8000/listbygenre"> A list item</a></li>
                      </ol>
    
                  </div>
                </div>
            </div>

            <div class="col-sm-6 my-6">
                <div class="card h-100">
                  <div class="card-body">
                    <h5 class="card-title">List of Geners</h5>
                    <ol class="list-group list-group-numbered">
                        <li class="list-group-item"> <a href="http://127.0.0.1:8000/listbygenre"> AI </a> </li>
                        <li class="list-group-item"> <a href="http://127.0.0.1:8000/listbygenre"> SOFTWARE </a></li>
                        <li class="list-group-item"> <a href="http://127.0.0.1:8000/listbygenre"> A  item </a></li>
                        <li class="list-group-item"> <a href="http://127.0.0.1:8000/listbygenre"> A  item </a></li>
                      </ol>
    
                  </div>
                </div>
            </div>
      </div>
</div>
@endsection