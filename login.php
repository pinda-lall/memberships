<?php require 'header.php'; ?>
<?php require 'registration.php'; ?>
  <body class="background">
    <?php if(!empty($message)): ?>
      <div class="alert alert-success">
        <?= $message; ?>
      </div>
    <?php endif;  ?>
      <div class="container">
        <div class="loginBox">
        <div class="row">
          <div class="col-md-6 login-left">
          <center>
          <h3>Login</h3>
          <p>Admin Only.</p>
        </center>
          <form class="" action="validation.php" method="post">
            <div class="form-group">
              <input type="text" name="user" class="form-control" placeholder="Username" required>
            </div>
            <div class="form-group">
              <input type="password" name="password" class="form-control" placeholder="password" required>
            </div>
            <button type="submit" class="btn btn-primary" name="login"> Login </button>
          </form>
        </div>
        <div class="col-md-6 login-right">
          <center>
          <h3> Sign Up </h3>
          <p>Make your Gym membership.</p>
          <!-- <p>Not a gym member? Sign up today and join us.</p> -->
        </center>
          <form class=""  method="post">
            <div class="form-group">
              <input type="text" name="firstName" class="form-control" placeholder="First Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="lastName" class="form-control" placeholder="Last Name" required>
            </div>
            <div class="form-group">
              <input type="text" name="email" class="form-control" placeholder="email" required>
            </div>
            <div class="form-group">
              <input type="textarea" name="address" class="form-control" placeholder="address" required>
            </div>
            <div class="form-group">
              <input type="date" name="date" class="form-control">
            </div>
            <div class="form-group">
              <input type="text" name="number" class="form-control" placeholder="Mobile number">
            </div>
            <div class="form-group">
              <input type="radio" name="subscription" value="monthly" checked>
              <label> Monthly subscription: £10.99 </label>
            </div>
            <div class="form-group">
              <input type="radio" name="subscription" value="annual">
              <label> Annual subscription: £119:99 </label>
            </div>
            <button type="submit" class="btn btn-primary" name="register"> Register </button>
          </form>
        </div>
        </div>
      </div>
      </div>
  </body>
</html>
