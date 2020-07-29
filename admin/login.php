<?php 
include "../models/User.php";
session_start();

if(isset($_POST['login'])){
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  $user = new User;
  $result = $user->checkUserLogin($username, $pass);

  if($result == 1){
    $_SESSION['username'] = $username;
    header('location: index.php');
  }
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <title>Login | YCOffee</title>
  <style>
    .custom-flex{
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
  </style>
</head>
<body>
  <div class="custom-flex">
    <div class="input-box bg-primary p-3 text-center text-light">
      <h4>Admin Panel</h4>
      <p>YCOffee | Coffee Shop</p>
      <form method="post">
        <input type="text" name="username" placeholder="Enter Username" class="form-control mb-3">
        <input type="password" name="pass" placeholder="Enter Pass" class="form-control">
        <input type="submit" value="Login" name="login" class="btn btn-dark mt-3">
      </form>
    </div>
    
  </div>
  
</body>
</html>