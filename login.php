<?php include 'header.php'; ?>


<div class="container alert-success">
<h3>Login</h3>
  <div class="row ">
    <div class="col-md-6">
      <form action="homeControl.php" method="post">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" name="pass" id="pass" class="form-control">
        </div>
        <input type="submit" value="Login" name="clogin" class="btn btn-success rounded-pill mb-3">
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>