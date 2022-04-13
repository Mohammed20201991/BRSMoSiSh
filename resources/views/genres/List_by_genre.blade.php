@extends('layouts.nav')

@section('content')
<div class="col-sm-12 col-md-12">
    <div class="container">
      <div class="row">
        <h3 class="mt-5">lists of all the books belonging to that genre :<span> Maths</span></h3>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">book title</th>
                <th scope="col">author</th>
                <th scope="col"> date</th>
                <th scope="col"> description</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                <td><a href = "http://127.0.0.1:8000/bookdetails">Mark </a></td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>des...</td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td><a href = "http://127.0.0.1:8000/bookdetails">Mark </a></td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>des...</td>

              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>des...</td>

              </tr>
              <tr>
                <th scope="row">1</th>
                <td><a href = "http://127.0.0.1:8000/bookdetails">Mark </a></td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>des...</td>

              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Jacob</td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>des...</td>

              </tr>
              <tr>
                <th scope="row">3</th>
                <td>Larry</td>
                <td>the Bird</td>
                <td>@twitter</td>
                <td>des...</td>
              </tr>
            </tbody>
        </table>
      </div>
    </div>  
</div>
@endsection