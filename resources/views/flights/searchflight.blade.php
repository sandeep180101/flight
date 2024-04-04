<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Search</title>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
    }
    
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    
    h1 {
        margin-top: 0;
    }
    
    form {
        margin-top: 20px;
    }
    
    label {
        font-weight: bold;
    }
    
    select, input[type="date"] {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        margin-bottom: 15px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }
    
    button {
        display: block;
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    
    button:hover {
        background-color: #0056b3;
    }
    </style>
    </head>
<body>
    <h1>Flight Search</h1>
    <form action="{{ route('flights.search') }}" method="post">
        @csrf
        <div>
            <label for="departure">Departure Airport:</label>
            <select name="departure" id="departure">
                @foreach($departureAirports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="arrival">Arrival Airport:</label>
            <select name="arrival" id="arrival">
                @foreach($arrivalAirports as $airport)
                    <option value="{{ $airport }}">{{ $airport }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label for="date">Date:</label>
            <input type="date" name="date" id="date" min="{{ now()->format('Y-m-d') }}" max="{{ now()->addDays(90)->format('Y-m-d') }}">
        </div>
        <button type="submit">Search Flights</button>
    </form>
</body>
</html>
