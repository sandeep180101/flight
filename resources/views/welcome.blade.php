<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        nav {
            background-color: #333;
            padding: 10px 20px;
            color: #fff;
        }
        
        nav a {
            color: #fff;
            text-decoration: none;
            margin-right: 10px;
        }
        
        nav a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <a href="{{ route('customers.index') }}">Customers</a>
    </nav>

    <div>
        <h1>Welcome to the Home Page</h1>
        <p>This is the home page of our website.</p>
        
        <form action="{{ route('search.flights') }}" method="GET">
            <label for="departure">Departure:</label>
            <select name="departure" id="departure">
                @foreach ($cities as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                @endforeach
            </select>
            <br><br>
            
            <label for="arrival">Arrival:</label>
            <select name="arrival" id="arrival">
                @foreach ($cities as $city)
                    <option value="{{ $city }}">{{ $city }}</option>
                @endforeach
            </select>
            <br><br>
            
            <label for="date">Date:</label>
            <select name="date" id="date">
                @foreach ($dates as $date)
                    <option value="{{ $date }}">{{ $date }}</option>
                @endforeach
            </select>
            <br><br>
            
            <button type="submit">Search Flights</button>
        </form>
    </div>
</body>
</html>
