<?php include 'header.php';  

if($uname == null){
  header('location: login.php');
}
$sid = session_id();
?>
<div class="container">
<div class="row">
  <div class="col-3 alert-success">
    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
      <a class="nav-link text-success active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
      <a class="nav-link text-success" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Order</a>
      <a class="nav-link text-success" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Profile</a>
    </div>
  </div>
  <div class="col-9">
    <div class="tab-content" id="v-pills-tabContent">
      <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
        <!-- dashboard -->
        <div class="welcome alert-success p-5 mb-2" id="home">
          <H1 class="py-5">Welcome To Dashboard <br>
          Hello <?php echo $uname ?>!</H1>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
        <!-- order seciton -->
        <div class="welcome alert-success p-3 mb-2" id="profile">
          <H3 class="pl-3">Your Order </H3>
          <hr>
          <?php $cart = new Cart; foreach($cart->getCartUser($uname, 1) as $car){ ?>
            <div class="alert-success my-2">
              <div class="row">
              <div class="col-md-1"></div>
                <div class="col-md-6 pt-1"><h5><?php echo $car['name']; ?></h5><p><?php echo $car['pdesc']; ?></p></div>
                <div class="col-md-2 pt-3 text-center">Amount: <?php echo $car['amount']; ?></div>
                <div class="col-md-1 pt-4"><?php echo $price = $car['price']; ?> TK</div>
                <div class="col-md-1 pt-4"><a href="#" class="btn btn-success btn-sm"><?php if($car['comp'] == 0){echo 'Process';}else{echo 'Complete';} ?></a></div>
              </div>
            </div>
            <hr>
          <?php } ?>
        </div>
      </div>
      <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"><div class="welcome alert-success p-3 mb-2" id="contact">
      <!-- profile section -->  
      <h3>Edit Profile</h3>
        <div class="col-md-8">
        <?php $users = new User; foreach($users->getuser($uname) as $user){ ?>
          <form action="homeControl.php" method="post">
            <div class="form-group">
              <label for="name">Name</label>
              <input type="text" name="name" id="name" class="form-control" value="<?php echo $user['name']; ?>">
            </div>
            <div class="form-group sr-only">
              <label for="username">Username</label>
              <input type="text" name="username" id="username" class="form-control" value="<?php echo $user['username']; ?>">
            </div>
            <div class="form-group">
              <label for="email">Email</label>
              <input type="email" name="email" id="email" class="form-control" value="<?php echo $user['email']; ?>">
            </div>
            <div class="form-group">
              <label for="pass">Password</label>
              <input type="password" name="pass" id="pass" class="form-control" value="<?php echo $user['password']; ?>">
            </div>
            <input type="submit" value="Update Profile" name="update" class="btn btn-success rounded-pill mb-3">
          </form>
          <?php } ?>
        </div>
      </div></div>
    </div>
  </div>
</div> <!-- row end -->
  
</div>
<?php include 'footer.php'; ?>