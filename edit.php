<?php require 'header.php'; ?>
<?php
include 'db.php';

if(isset($_POST['create'])){
  $id = $_GET['id'];
  $firstName = $_POST['firstName'];
  $lastName = $_POST['lastName'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $date = $_POST['date'];
  $number = $_POST['number'];
  $subscription = $_POST['subscription'];

  $q = "UPDATE gymmembers set id='$id' , firstName='$firstName' , lastName='$lastName' , email='$email' ,
  address='$address' , date='$date' , number='$number' , subscription='$subscription' WHERE id=$id ";
  mysqli_query($con, $q);
  // header("location:index.php");
  $message = 'Membership updated';
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
    <div class="container">
      <center>
        <h3>Update ID No: <?php echo $_GET['id']?></h3>
      </center>
        <form class="" method="post">
          <div class="form-group">
            <input type="text" name="firstName" class="form-control" value="  "placeholder="First Name" required>
          </div>
          <div class="form-group">
            <input type="text" name="lastName" class="form-control" value="  "placeholder="Last Name" required>
          </div>
          <div class="form-group">
            <input type="text" name="email" class="form-control" value="  "placeholder="email" required>
          </div>
          <div class="form-group">
            <input type="textarea" name="address" class="form-control" value="  "placeholder="address" required>
          </div>
          <div class="form-group">
            <input type="date" name="date" class="form-control" value=" " >
          </div>
          <div class="form-group">
            <input type="number" name="number" class="form-control" value="" placeholder="Mobile number">
          </div>
          <div class="form-group">
            <input type="radio" name="subscription" value="monthly" checked>
            <label> Monthly subscription: £10.99 </label>
          </div>
          <div class="form-group">
            <input type="radio" name="subscription" value="annual">
            <label> Annual subscription: £119:99 </label>
          </div>
          <button type="submit" class="btn btn-primary" name="create"> Save </button>
        </form>
      </div>
  </body>
</html>
