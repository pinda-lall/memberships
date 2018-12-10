<?php
session_start();
// header('location:login.php');

require 'db.php';
$message = '';
if (isset ($_POST['firstName']) && isset ($_POST['lastName']) && isset ($_POST['email'])
    && isset ($_POST['address']) && isset ($_POST['date']) && isset ($_POST['number']) && isset ($_POST['subscription'])) {

      $firstName = $_POST['firstName'];
      $lastName = $_POST['lastName'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $date = $_POST['date'];
      $number = $_POST['number'];
      $subscription = $_POST['subscription'];

      $reg = " insert into gymmembers (firstName , lastName , email , address , date , number , subscription) values ('$firstName' , '$lastName' , '$email' , '$address' , '$date' , '$number' , '$subscription')";
      mysqli_query($con, $reg);
      $message = 'Membership Created';

    }
?>
