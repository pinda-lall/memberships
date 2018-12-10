<?php

session_start();

// commect to the database
$con = mysqli_connect("localhost","root","");

//choose the database name
mysqli_select_db($con, 'memberships');

//store name from form in login.php
$name = $_POST['user'];
//store password from form in login.php
$password = $_POST['password'];

$s = " select * from admin where name = '$name' && password = '$password'";

$result = mysqli_query($con, $s);

$num = mysqli_num_rows($result);

if($num == 1){
  $_SESSION['user'] = $name;
  header('location:index.php');
} else {
  header('location:login.php');
}

?>
