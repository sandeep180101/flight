<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flight Search Results</title>
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
            margin-top: 10px;
        }

        button:hover {
            background-color: #0056b3;
        }

        .flight-details {
            margin-top: 20px;
        }

        .flight-details > div {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 10px;
            margin-bottom: 10px;
        }

        .flight-details p {
            margin: 5px 0;
        }

        .flight-details input[type="radio"] {
            margin-right: 10px;
        }

        .flight-details label {
            cursor: pointer;
        }

        .flight-details hr {
            margin-top: 10px;
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Flight Search Results</h1>

        @if ($flights->isEmpty())
            <p>Sorry, no flights available for the selected criteria.</p>
        @else
            <form action="{{ route('customers.create') }}" method="GET">
                <div class="flight-details">
                    @foreach ($flights as $flight)
                        <div>
                            <p>Flight Number: {{ $flight->flight_number }}</p>
                            <p>Airline: {{ $flight->flight_company_name }}</p>
                            <p>Departure Airport: {{ $flight->departure_airport }}</p>
                            <p>Arrival Airport: {{ $flight->arrival_airport }}</p>
                            <p>Departure Time: {{ $flight->departure_time }}</p>
                            <p>Arrival Time: {{ $flight->arrival_time }}</p>
                            <p>Price: {{ $flight->price }}</p>
                            <input type="radio" id="flight_{{ $flight->id }}" name="flight_id" value="{{ $flight->id }}">
                            <label for="flight_{{ $flight->id }}">Select {{$flight->flight_company_name}} flight</label>
                        </div>
                        <hr>
                    @endforeach
                </div>

                <button type="submit">Create Customer</button>
            </form>
        @endif
    </div>  
</body>
</html>
