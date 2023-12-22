<?php
$server="localhost";
$username="root";
$password="";
$datasbase="users";

$conn = mysqli_connect($server,$username,$password,$datasbase);

if (!$conn) {
   // echo "The connection is successful";
//}else {
    die ("The conncection was not successful because ". mysqli_connect_error());
}

?>