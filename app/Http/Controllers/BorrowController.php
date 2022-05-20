<?php

namespace App\Http\Controllers;

use App\Models\Borrow;
use App\Http\Requests\StoreBorrowRequest;
use App\Http\Requests\UpdateBorrowRequest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BorrowController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pendingRentals = Borrow::where('reader_id', Auth::user()->id)->where('status', 'PENDING')->get();
        $now = Carbon::now();
        $acceptedActiveRentals = Borrow::where('reader_id', Auth::user()->id)->where('status', 'ACCEPTED')->where('deadline', '<', $now)->get();
        $acceptedLateRentals = Borrow::where('reader_id', Auth::user()->id)->where('status', 'ACCEPTED')->where('deadline', '>', $now)->get();
        $rejectedRentals = Borrow::where('reader_id', Auth::user()->id)->where('status', 'REJECTED')->get();
        $returnedRentals = Borrow::where('reader_id', Auth::user()->id)->where('status', 'RETURNED')->get();
        return view('rentals.my_rentals', compact('pendingRentals', 'acceptedActiveRentals', 'acceptedLateRentals', 'rejectedRentals', 'returnedRentals'));
    }

    public function librarianRentals() {
        $pendingRentals = Borrow::where('status', 'PENDING')->get();
        $now = Carbon::now();
        $acceptedActiveRentals = Borrow::where('status', 'ACCEPTED')->where('deadline', '<', $now)->get();
        $acceptedLateRentals = Borrow::where('status', 'ACCEPTED')->where('deadline', '>', $now)->get();
        $rejectedRentals = Borrow::where('status', 'REJECTED')->get();
        $returnedRentals = Borrow::where('status', 'RETURNED')->get();
        return view('rentals.my_rentals', compact('pendingRentals', 'acceptedActiveRentals', 'acceptedLateRentals', 'rejectedRentals', 'returnedRentals'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBorrowRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBorrowRequest $request)
    {
        // return $request->all();
        $request->validate([
            'reader_id' => 'required',
            'book_id' => 'required',
            'status' => 'required'
        ]);

        $borrow = new Borrow();
        $borrow->create($request->except('_token'));

        return redirect()->back()->with('success', 'Rental Request Submitted Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function show(Borrow $borrow)
    {
        $rental = $borrow;
        return view('rentals.rental_details', compact('rental'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function edit(Borrow $borrow)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBorrowRequest  $request
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $borrow = Borrow::find($id);
        if($request->status == "PENDING") {
            return redirect()->route('rental.details', $borrow)->with('success',"Can't set status to pending");
        }
        $borrow->status = $request->status;
        $borrow->deadline = $request->deadline;
        $borrow->status = $request->status;
        if($request->status == "ACCEPTED" || $request->status == "REJECTED") {
            $borrow->request_processed_at = Carbon::now();
            $borrow->request_managed_by = $request->librarian_id;
        }
        else if($request->status == "RETURNED") {
            $borrow->returned_at = Carbon::now();
            $borrow->return_managed_by = $request->librarian_id;
        }
        $borrow->save();

        return redirect()->route('rental.details', $borrow)->with('success','Rental Request Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Borrow  $borrow
     * @return \Illuminate\Http\Response
     */
    public function destroy(Borrow $borrow)
    {
        //
    }
}
