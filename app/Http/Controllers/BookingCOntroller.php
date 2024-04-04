<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Flight;
use App\Models\Booking;

class BookingController extends Controller
{
    public function index($custid, $flightid)
    {
        $customer = Customer::findOrFail($custid);
        $flight = Flight::findOrFail($flightid);
        return view('bookings.create',compact('customer', 'flight'));
    }

    public function create($custid, $flightid)
    {
        $customer = Customer::findOrFail($custid);
        $flight = Flight::findOrFail($flightid);

        return view('bookings.create', compact('customer', 'flight'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'customer_id' => 'required',
            'flight_id' => 'required',
            'seat_number'=> 'required',
        ]);

        Booking::create($validatedData);

        return redirect()->route('bookings.success');
    }
}
