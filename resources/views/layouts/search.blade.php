 {{-- FILTER STRING SEARCH BY OTHER OR TITLE  --}}
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
{{-- End of search part --}}