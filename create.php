<?php require 'header.php'; ?>
<?php
require 'db.php';
$message = '';
if (isset ($_POST['firstName']) && isset ($_POST['lastName']) && isset ($_POST['email'])
    && isset ($_POST['address']) && isset ($_POST['date']) && isset ($_POST['number']) && isset ($_POST['subscription'])) {
      // echo "submit";
      //store name from form in login.php
      $firstName = $_POST['firstName'];
      //store password from form in login.php
      $lastName = $_POST['lastName'];
      //store name from form in login.php
      $email = $_POST['email'];
      //store password from form in login.php
      $address = $_POST['address'];
      //store name from form in login.php
      $date = $_POST['date'];
      //store password from form in login.php
      $number = $_POST['number'];
      $subscription = $_POST['subscription'];

      $reg = " insert into gymmembers (firstName , lastName , email , address , date , number , subscription) values ('$firstName' , '$lastName' , '$email' , '$address' , '$date' , '$number' , '$subscription')";
      mysqli_query($con, $reg);
      $message = 'Membership Created';
      // header('location:index.php');
    }
?>

<?php require 'header.php'; ?>
  <body>
    <?php require 'nav.php'; ?>

    <?php if(!empty($message)): ?>
      <div class="alert alert-success">
        <?= $message; ?>
      </div>
    <?php endif;  ?>

    <?php require 'createForm.php'; ?>

  </body>
</html>
