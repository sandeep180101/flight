<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Create Customer</title>
      <style>
         body {
         background-color: burlywood;
         font-family: Arial, sans-serif;
         margin: 0;
         padding: 0;
         }
         .container {
         padding-top: 50px;
         display: flex;
         justify-content: center;
         }
         .card {
         background-color: gray;
         border: 1px solid #ccc;
         border-radius: 5px;
         width: 100%; 
         }
         .card-header {
         background-color: #007bff;
         color: #fff;
         font-weight: bold;
         padding: 10px;
         border-bottom: 1px solid #007bff;
         border-radius: 5px 5px 0 0;
         }
         .card-body {
         padding: 20px;
         }
         .form-group {
         margin-bottom: 20px;
         }
         .form-label {
         font-weight: bold;
         }
         .form-control {
         border: 1px solid #ced4da;
         border-radius: 4px;
         padding: 8px 10px;
         width: calc(100% - 1px); 
         font-size: 16px;
         box-sizing: border-box;
         }
         .btn-primary {
         background-color:forestgreen;
         color: #fff;
         border: none;
         border-radius: 4px;
         padding: 10px 20px;
         cursor: pointer;
         font-size: 16px;
         transition: background-color 0.3s;
         }
         .btn-primary:hover {
         background-color:green;
         }
      </style>
   </head>
   <body>
      <div class="container">
         <div class="row justify-content-center">
            <div class="col-md-8">
               <div class="card">
                  <div class="card-header">Create Customer</div>
                  <div class="card-body">
                     <form method="POST" action="{{ route('customers.store') }}">
                        @csrf
                        <div class="form-group">
                           <label for="name" class="form-label">Name</label>
                           <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                           <label for="email" class="form-label">Email</label>
                           <input type="email" name="email" id="email" class="form-control" required>
                        </div>
                        <div class="form-group">
                           <label for="age" class="form-label">Age</label>
                           <input type="number" name="age" id="age" class="form-control" required>
                        </div>
                        <div class="form-group">
                           <label for="dob" class="form-label">Date of Birth</label>
                           <input type="date" name="dob" id="dob" class="form-control" required>
                        </div>
                        <div class="form-group">
                           <label for="address" class="form-label">Address</label>
                           <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <div class="form-group">
                           <label for="id_proof_number" class="form-label">ID Proof Number</label>
                           <input type="text" name="id_proof_number" id="id_proof_number" class="form-control" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Create</button>
                     </form>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </body>
</html>