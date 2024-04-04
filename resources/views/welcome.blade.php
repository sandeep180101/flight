<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <style>
        /* Styles for the navigation bar */
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
    </div>
</body>
</html>
