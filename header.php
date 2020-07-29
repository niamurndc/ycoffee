<?php 

session_start();
spl_autoload_register(function($class){
  require './models/'.$class.'.php'; 
});

if(isset($_SESSION['username']) == ''){
  $uname = null;
}else{
  $uname = $_SESSION['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>YCOffee</title>
  <style>
    .h-img{
      height: 320px;
      width: 100%;
    }
  </style>
</head>
<body>
  <!-- nav start -->
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container">
      <a class="navbar-brand" href="index.php">YCOffee</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample07" aria-controls="navbarsExample07" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse" id="navbarsExample07">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item">
            <a class="nav-link" href="product.php?cat=coffee">Coffee</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php?cat=snacks">Snacks</a>
          </li>
        </ul>
        <?php if($uname == null){ ?>
          <a href="login.php" class="btn btn-outline-success btn-sm mr-4 rounded-pill">Login</a>
          <a href="signup.php" class="btn btn-success btn-sm rounded-pill ">Signup</a>
        <?php }else{ ?>
          <a href="cart.php" class="text-success mr-3">Cart</a>
          <a href="profile.php" class="text-success mr-3"><?php echo $uname; ?></a>
          <a href="homeControl.php?sid=<?php echo session_id(); ?>" class="btn btn-outline-success btn-sm rounded-pill">Logout</a>
        <?php } ?>
      </div>
    </div>
  </nav>
  <!-- nav end -->