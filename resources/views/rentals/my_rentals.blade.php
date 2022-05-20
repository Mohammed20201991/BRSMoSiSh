@extends('layouts.nav')

@section('content')
<style>
    .rental_heading {
        font-size: 20px;
        font-weight: 600;
    }
</style>
    <div class="container py-3">

        <div class="list-group">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-1 rental_heading">Pending Rental Requests</li>
            </ul>
            </a>

            <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
            <table class="table table-bordered">
                <thead class="table-primary">
                    <tr>
                        <th>Sr</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Date of Rental</th>
                        <th>Deadline</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @if($pendingRentals->count() > 0)
                    @foreach ($pendingRentals as $rental)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$rental->book->title}}</td>
                        <td>{{$rental->book->authors}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->request_processed_at)->format('d-M-Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->deadline)->format('d-M-Y')}}</td>
                        <td><a href="{{Auth::user()->is_librarian == 0 ? route('my_rental.details', $rental) : route('rental.details', $rental)}}" class="btn btn-sm btn-primary">View Details</a></td>
                    </tr>
                    @endforeach
                    @else
                    No Data Found
                    @endif
                </tbody>
            </table>
            </a>
            <div aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>
        <br><br>
        <div class="list-group">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-1 rental_heading">Accepted Active Rentals</li>
            </ul>
            </a>

            <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
            <table class="table">
                <thead class="table-secondary">
                    <tr>
                        <th>Sr</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Date of Rental</th>
                        <th>Deadline</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @if($acceptedActiveRentals->count() > 0)
                    @foreach ($acceptedActiveRentals as $rental)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$rental->book->title}}</td>
                        <td>{{$rental->book->authors}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->request_processed_at)->format('d-M-Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->deadline)->format('d-M-Y')}}</td>
                        <td><a href="{{Auth::user()->is_librarian == 0 ? route('my_rental.details', $rental) : route('rental.details', $rental)}}" class="btn btn-sm btn-primary">View Details</a></td>
                    </tr>
                    @endforeach
                    @else
                    No Data Found
                    @endif
                </tbody>
            </table>
            </a>
        </div>
        <br><br>
        <div class="list-group">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-1 rental_heading">Accepted Rentals, Pending Return</li>
            </ul>
            </a>

            <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
            <table class="table">
                <thead class="table-primary">
                    <tr>
                        <th>#</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Date of Rental</th>
                        <th>Deadline</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @if($acceptedLateRentals->count() > 0)
                    @foreach ($acceptedLateRentals as $rental)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$rental->book->title}}</td>
                        <td>{{$rental->book->authors}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->request_processed_at)->format('d-M-Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->deadline)->format('d-M-Y')}}</td>
                        <td><a href="{{Auth::user()->is_librarian == 0 ? route('my_rental.details', $rental) : route('rental.details', $rental)}}" class="btn btn-sm btn-primary">View Details</a></td>
                    </tr>
                    @endforeach
                    @else
                    No Data Found
                    @endif
                </tbody>
            </table>
            </a>
        </div>
        <br><br>
        <div class="list-group">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-1 rental_heading">Rejected Rental Requests</li>
            </ul>
            </a>

            <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
            <table class="table">
                <thead class="table-warning">
                    <tr>
                        <th>Sr</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Date of Rental</th>
                        <th>Deadline</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @if($rejectedRentals->count() > 0)
                    @foreach ($rejectedRentals as $rental)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$rental->book->title}}</td>
                        <td>{{$rental->book->authors}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->request_processed_at)->format('d-M-Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->deadline)->format('d-M-Y')}}</td>
                        <td><a href="{{Auth::user()->is_librarian == 0 ? route('my_rental.details', $rental) : route('rental.details', $rental)}}" class="btn btn-sm btn-primary">View Details</a></td>
                    </tr>
                    @endforeach
                    @else
                    No Data Found
                    @endif
                </tbody>
            </table>
            </a>
        </div>
        <br><br>
        <div class="list-group">
            <ul class="list-group list-group-horizontal">
                <li class="list-group-item p-1 rental_heading">Returned Rentals</li>
            </ul>
            </a>

            <a class="list-group-item list-group-item-action" style="background-color: #ffre3">
            <table class="table">
                <thead class="table-success">
                    <tr>
                        <th>Sr</th>
                        <th>Book Title</th>
                        <th>Author</th>
                        <th>Date of Rental</th>
                        <th>Deadline</th>
                        <th>Details</th>
                    </tr>
                </thead>
                <tbody>
                    @if($returnedRentals->count() > 0)
                    @foreach ($returnedRentals as $rental)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$rental->book->title}}</td>
                        <td>{{$rental->book->authors}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->request_processed_at)->format('d-M-Y')}}</td>
                        <td>{{\Carbon\Carbon::parse($rental->deadline)->format('d-M-Y')}}</td>
                        <td><a href="{{Auth::user()->is_librarian == 0 ? route('my_rental.details', $rental) : route('rental.details', $rental)}}" class="btn btn-sm btn-primary">View Details</a></td>
                    </tr>
                    @endforeach
                    @else
                    No Data Found
                    @endif
                </tbody>
            </table>
            </a>
            <div aria-label="Page navigation example">
                <ul class="pagination">
                  <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                  <li class="page-item"><a class="page-link" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
                  <li class="page-item"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
        </div>

    </div>

@endsection
