<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Booking</title>
</head>
<body>
    <h1>Create Booking</h1>
    <p>Customer: {{ $customer->name }}</p>
    <p>Flight: {{ $flight->flight_number }}</p>
    @php
        $seatNumber = 0;
        $row = chr(65 + (int) ceil($seatNumber / 20)); 
        $seat = $seatNumber % 20 == 0 ? 20 : $seatNumber % 20; 
        $seatNumber = $row . $seat;
    @endphp
    <p>Seat Number: {{ $seatNumber }}</p>
    <form action="{{ route('bookings.store') }}" method="POST">
        @csrf
        <input type="hidden" name="customer_id" value="{{ $customer->id }}">
        <input type="hidden" name="flight_id" value="{{ $flight->id }}">
        <input type="hidden" name="seat_number" value="{{ $seatNumber }}">
        <button type="submit">Confirm Booking</button>
    </form>
</body>
</html>
