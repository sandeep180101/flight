<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>bookings</title>
      <style>
         body {
         background-color: burlywood;
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         }
         .navbar {
         background-color: #f8f9fa;
         padding: 15px 0;
         }
         .navbar-brand {
         font-size: 24px;
         }
         .navbar-nav .nav-link {
         font-size: 18px;
         color: #333;
         }
         .navbar-nav .nav-link:hover {
         color: #007bff;
         }
         .main-content {
         padding: 20px;
         }
         .form-group {
         margin-bottom: 20px;
         }
         .form-label {
         font-weight: bold;
         }
         .container
         {
         text-align: center;
         }
         .btn {
         display: inline-block;
         padding: 8px 16px;
         font-size: 16px;
         border: none;
         border-radius: 4px;
         background-color: #007bff;
         color: #fff;
         transition: background-color 0.3s;
         float: right;
         }
         .btn:hover {
         background-color: #0056b3;
         }
         .table {
         width: 100%;
         border-collapse: collapse;
         border-radius: 1px solid black;
         }
         .table th,
         .table td {
         padding: 10px;
         border: 1px solid black;
         }
         .table th {
         background-color: #f2f2f2;
         font-weight: bold;
         text-align: center;
         }
         .table tr:nth-child(even) {
         background-color: #f9f9f9;
         }
         .table tr:hover {
         background-color: #f0f0f0;
         }
      </style>
   </head>
   <body>
      <div class="collapse navbar-collapse" id="navbarNav">
         <a class="nav-link" href="{{ route('bookings.create') }}"><button type="button" class="btn btn-primary">Add flight</button></a>
      </div>
      <div class="container">
      <div class="row justify-content-center">
         <div class="col-md-8">
            <div class="card">
               <div class="card-body">
                  <table class="table">
                     <thead>
                        <tr>
                           <th>Name</th>
                           <th>Email</th>
                           <th>Age</th>
                           <th>Date of Birth</th>
                           <th>Address</th>
                        </tr>
                     </thead>
                     <tbody>
                        @foreach ($bookings as $booking)
                        <tr>
                           <td>{{ $booking->name }}</td>
                           <td>{{ $booking->email }}</td>
                           <td>{{ $booking->age }}</td>
                           <td>{{ $booking->dob }}</td>
                           <td>{{ $booking->address }}</td>
                        </tr>
                        @endforeach
                     </tbody>
                  </table>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>