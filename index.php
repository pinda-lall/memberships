<?php require 'header.php'; ?>
  <?php
    session_start();
    if(!isset($_SESSION['user'])){
      header('location:login.php');
    }
  ?>

  <body>
    <?php require 'nav.php'; ?>
    <div class="adminName">
      <!-- <h1>Welcome <?php echo $_SESSION['user']?> </h1> -->
    </div>
    <div class="container">
      <?php require 'db.php'; ?>
    <?php
      //select all the data from gymmemberships
      $result = $con->query("SELECT * FROM gymmembers");
    ?>

    <center>
      <h3>Welcome <?php echo $_SESSION['user']?>. Below are the details of all Gym Members</h3>
    </center>
    <div class="row justify-content-center">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Address</th>
            <th>Date</th>
            <th>Number</th>
            <th>Subscription</th>
            <th colspan="1">Action</th>
          </tr>
        </thead>

        <?php while ($row = $result->fetch_assoc()): ?>
          <tr>
            <td><?php echo $row['id'] ?></td>
            <td><?php echo $row['firstName'] ?></td>
            <td><?php echo $row['lastName'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['address'] ?></td>
            <td><?php echo $row['date'] ?></td>
            <td><?php echo $row['number'] ?></td>
            <td><?php echo $row['subscription'] ?></td>
            <td>
              <a href="edit.php?id=<?php echo $row['id']; ?>"
                class="btn btn-info">Edit</a>
            </td>
          </tr>
        <?php endwhile; ?>
      </table>
    </div>

    <?php
      function pre_r( $array ) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
      }
    ?>
  </div>
  </body>
</html>
