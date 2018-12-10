<?php require 'header.php'; ?>
<div class="container">
  <div class=".createBox">
    <center>
      <h3>Create</h3>
    </center>
    <form class="" method="post">
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
      <button type="submit" class="btn btn-primary" name="create"> Create </button>
    </form>
  </div>
  </div>
