 {{-- FILTER STRING SEARCH BY OTHER OR TITLE  --}}
<div class="container">
 <div class="row mt-3">
    <link href="\css\search-filter.css" rel="stylesheet">
    <div class="container">
        <div class="row searchFilter mt-3" >
            <div class="col-sm-12" >
            <h3>Search for books by author or title,</h3>
            <form action="{{route('search')}}" method="GET">
                <div class="input-group" >
                    <input id="table_filter" name="search_text" type="text" class="form-control" aria-label="Text input with segmented button dropdown" placeholder="Type Search Keyword Here" required>
                    <div class="input-group-btn" >
                        <button type="button" class="btn btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" ><span class="label-icon" >Category</span> <span class="caret" >&nbsp;</span></button>
                        <div class="dropdown-menu" >
                            <ul>
                                <li class="dropdown-item">
                                    <input type="radio" name="search_by" value="title" required><label>Title</label>
                                </li>
                                <li class="dropdown-item">
                                    <input type="radio" name="search_by" value="authors"><label>Author</label>
                                </li>
                            </ul>
                        </div>
                        <button id="searchBtn" type="submit" class="btn btn-secondary btn-search" ><span class="glyphicon glyphicon-search" >&nbsp;</span> <span class="label-icon" >Search</span></button>
                    </div>
                </div>
            </form>
           </div>
        </div>
      </div>
</div>
</div>
{{-- End of search part --}}
