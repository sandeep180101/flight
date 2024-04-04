<?php

namespace App\Http\Controllers;

use App\Models\Flight;
use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index()
    {
        $flight =Flight::all();
        $customers = Customer::all();
        return view('customers.index', compact('customers','flight'));
    }

    public function create()
    {
        return view('customers.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:customers',
            'age' => 'required|integer',
            'dob' => 'required|date',
            'address' => 'required|string',
            'id_proof_number' => 'required|string|unique:customers',
        ]);

        Customer::create($validatedData);

        return redirect()->route('customers.index')->with('success', 'Customer created successfully!');
    }
}
