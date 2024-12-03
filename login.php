<?php
     $hostname = 'localhost';
     $username = 'root';
     $password = '';
     $db_name = 'login_database';

     // Database connection
     $connection = mysqli_connect($hostname, $username, $password, $db_name);

     if (!$connection) {
        die("Connection failed: " . mysqli_connect_error());
     }

     if (isset($_POST['btn'])) {
          $email = $_POST['email'];
          $password = $_POST['password'];

     
          $sql = "SELECT * FROM login_user WHERE email='$email' AND password='$password'";
          $query = mysqli_query($connection, $sql);

         if (mysqli_num_rows($query) > 0) {
               header('Location: dashboard.php');
               exit;
          } else {
               echo 'Invalid email or password';
          }
     }
?>







<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>PHP Login and Logout</title>
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
     

     <div class="container">
          <div class="row">
               <div class="col-sm-6">
                    <div class="form-group">

                         <h2 class="text-left text-danger"> Login Form </h2>

                         <form action="" method="POST">

                              <div class="form-group">
                                   <label> Email </label>
                                   <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                              </div>


                              <div class="form-group">
                                   <label> Password </label>
                                   <input type="text" name="password" placeholder="Enter Your password" class="form-control">
                              </div>

                              <input type="submit" name="btn" value="login" class="btn btn-success">
                         </form>
                    </div>
               </div>
          </div>
     </div>
</body>
</html>