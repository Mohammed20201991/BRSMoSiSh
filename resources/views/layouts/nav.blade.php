<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.4.1/united/bootstrap.min.css">

    <title>Music project</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="#">MyTracks</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          {{-- <a class="nav-item nav-link" href="/projects">Projects</a> --}}
          
          {{-- <a class="nav-item nav-link" href="/projects/create">New project</a> --}}
          <a class="nav-item nav-link" href="/about">About</a>
          <a class="nav-item nav-link" href="/contact">Contact</a>
          <a class="nav-item nav-link" href="/login">Login</a>
          <a class="nav-item nav-link" href="/register">Registeration</a>
        </div>
      </div>
    </nav>

    <div class="row">
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
    </div>

    @yield('content')
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>