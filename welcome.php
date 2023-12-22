<?php

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>welcome!</title>
  </head>
  <body>
    
  <?php require 'partials/_nav.php'?>
  <div class="container">
    <h1 class="text centre"></h1>
  </div>
  <div class="alert alert-success" role="alert">
  Welcome to the website
</div>
<?php

  include "partials/_dbconnect.php";
  $sql = "SELECT * FROM `users`";
  $result= mysqli_query($conn,$sql);
  
  $num=mysqli_num_rows($result);
  echo $num;
  echo " Records in database<br>";
  ?>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">sno</th>
        <th scope="col">Username</th>
        <th scope="col">password</th>
        <th scope="col">date</th>
      </tr>
    </thead>
    <tbody>
    <?php if($num>0){ while ($row = mysqli_fetch_assoc($result)) { ?>
    <tr>
      <td><?php echo $row['sno'] ?></td>
      <td><?php echo $row['username'] ?></td>
      <td><?php echo $row['password'] ?></td>
      <td>@<?php echo $row['date'] ?></td>
    </tr>
    
<?php } }?>
  </tbody>
</table>
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