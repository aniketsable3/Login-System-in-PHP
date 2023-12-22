<?php
$showAlert=false;
if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include "partials/_dbconnect.php";
    $username=$_POST['username'];
    $password=$_POST['password'];
    $cpassword=$_POST['cpassword'];
    $exists=false;

    $existsql="SELECT * FROM `users` WHERE username='student';";
    $result=mysqli_query($conn,$existsql);
    if(($password == $cpassword) && $exists==false){
        $sql="INSERT INTO `users` (`sno`, `username`, `password`, `date`) VALUES (NULL, '$username', '$password', current_timestamp());";
        $result= mysqli_query($conn,$sql);
        header("location:welcome.php");
      //   if(!$result || mysqli_num_rows($result) == 0){
      //     $numExistrows = mysqli_num_rows($result);
      // }
        // print_r(mysqli_num_rows($result)); exit;
        // $numExistrows=mysqli_num_rows($result);
        
        if ($result){
            $showAlert = true;
        }
    }
}
    
    
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>signup</title>

  
 </head>


  <body>
  <?php require 'partials/_nav.php'?>
  <?php 
  if ($showAlert) {
    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Success!</strong> Your Account is now created and you can login.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';} 
else{
  echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong>Error!</strong> nahi.
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
}
?>
  <div class="container">
    <h1 class="text-center ">Sign Up to our website</h1>

    <form action="signup.php" method="post">
  <div class="form-group">
    <label for="username">User Name</label>
    <input type="username" class="form-control" id="username" name="username"aria-describedby="emailHelp" placeholder="Enter email" required>
    
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" name="password" placeholder="password" required>
  </div>
  <div class="form-group">
    <label for="cpassword">Confirm Password</label>
    <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Password" required>
    <small id="emailHelp" class="form-text text-muted">Make Sure to type the Same Password As Earlier</small>
  </div>
  
  <button type="submit" class="btn btn-primary">SignUp</button>
</form>
  </div>
  <?php
  require 'footer.php';
  ?>

 
 
    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>