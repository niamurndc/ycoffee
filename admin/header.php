<?php
session_start();

if($_SESSION['username'] == ''){
  header('location: login.php');
}else{
  $uname = $_SESSION['username'];
}
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    <title>Admin | YCOfee</title>
  </head>
  <body>
    <nav class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 mr-0 px-3" href="#">YCOfee | Admin</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-toggle="collapse" data-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <ul class="navbar-nav px-3">
    <li class="nav-item">
      <span class="text-light">Loggedin <?php echo $uname; ?></span> | <a class="text-light" href="logout.php">Sign out</a>
    </li>
  </ul>
</nav>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="sidebar-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link" href="index.php">
              Dashboard 
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="user.php">
              Users
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="product.php">
              Products
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="attr.php">
              Attributes
            </a>
          </li>
        </ul>
      </div>
    </nav>