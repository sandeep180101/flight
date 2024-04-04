<?php

use App\Http\Controllers\BookingCOntroller;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\FlightController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/flights/search', [FlightController::class, 'index'])->name('flights.search');
Route::post('/flights/search', [FlightController::class, 'search'])->name('flights.search');

Route::get('/customers/{custid}/{flightid}', [CustomerController::class, 'index'])->name('customers.index');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');
Route::post('/customers', [CustomerController::class, 'store'])->name('customers.store');

Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');
Route::get('/bookings/create/{custid}/{flightid}', [BookingController::class, 'create'])->name('bookings.create');
Route::post('/bookings', [BookingController::class, 'store'])->name('bookings.store');