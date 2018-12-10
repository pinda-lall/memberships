<?php
  // commect to the database
  $con = mysqli_connect("localhost","root","");
  //choose the database name
  mysqli_select_db($con, 'memberships');
?>
