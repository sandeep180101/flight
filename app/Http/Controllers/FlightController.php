<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;

class FlightController extends Controller
{
    public function index()
    {
        $departureAirports = Flight::select('departure_airport')->distinct()->pluck('departure_airport');
        $arrivalAirports = Flight::select('arrival_airport')->distinct()->pluck('arrival_airport');

        return view('flights.searchflight', compact('departureAirports', 'arrivalAirports'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'departure' => 'required|string',
            'arrival' => 'required|string',
            'date' => 'required|date|after_or_equal:' . now()->format('Y-m-d'),
        ]);

        $flights = Flight::where('departure_airport', $request->departure)
                         ->where('arrival_airport', $request->arrival)
                         ->get();

        return view('flights.results', compact('flights'));
    }
}
