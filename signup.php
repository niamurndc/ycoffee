<?php include 'header.php'; ?>

<div class="container alert-success">
<h3>Register new account</h3>
  <div class="row ">
    <div class="col-md-6">
      <form action="homeControl.php" method="post">
        <div class="form-group">
          <label for="name">Name</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" id="username" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" name="email" id="email" class="form-control">
        </div>
        <div class="form-group">
          <label for="pass">Password</label>
          <input type="password" name="pass" id="pass" class="form-control">
        </div>
        <input type="submit" value="Signup" name="signup" class="btn btn-success rounded-pill mb-3">
      </form>
    </div>
  </div>
</div>

<?php include 'footer.php'; ?>