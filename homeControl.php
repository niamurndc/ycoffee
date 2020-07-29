<?php 

include 'models/Cart.php';
include 'models/User.php';

session_start();

$sid = session_id();


if(isset($_POST['addcart'])){
  $name = $_POST['pname'];
  $price = $_POST['price'];
  $amount = $_POST['amount'];
  $desc = $_POST['special'];
  $fprice = $price * $amount;

  $cart = new Cart;
  $cart->createCart($sid, $desc, $amount, $name, $fprice);

}


if(isset($_GET['id']) || isset($_GET['action'])){
  if($_GET['action'] == 'delete'){
    $id = $_GET['id'];
    $product = new Cart;

    $product->deleteCart($id);
  }
}

if(isset($_GET['sid'])){
    $sid = $_GET['sid'];
    $product = new Cart;

    $product->deleteCartAll($sid);

}


if(isset($_POST['order'])){
  $fname = $_POST['fname'];
  $lname = $_POST['lname'];
  $email = $_POST['email'];
  $username = $_POST['username'];
  $address1 = $_POST['address1'];
  $address2 = $_POST['address2'];
  $state = $_POST['state'];
  $contry = $_POST['contry'];
  $zip = $_POST['zip'];
  $pm = $_POST['paymentMethod'];
  $sid = session_id();
  $hname = $fname.' '.$lname;
  $add = $address2.', '.$address1.', '.$state.', '.$contry.'-'.$zip;

  $cart = new Cart;
  $cart->editCart($sid, $hname, $add, $username, $email, $pm, '1');

}

if(isset($_POST['clogin'])){
  $username = $_POST['username'];
  $pass = $_POST['pass'];

  $user = new User;
  $result = $user->checkUserLogin($username, $pass);

  if($result == 1){
    $_SESSION['username'] = $username;
    header('location: index.php');
  }
}

if(isset($_POST['signup'])){
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  $user = new User;
  $result = $user->checkUser($username);

  if($result < 1){
    $user->createUser($name, $username, $email, $pass);
    
    header('location: login.php');
  }else{
    echo 'username exist';
  } 
}

if(isset($_POST['update'])){
  $username = $_POST['username'];
  $pass = $_POST['pass'];
  $name = $_POST['name'];
  $email = $_POST['email'];

  $user = new User;

  $user->editUser($name, $username, $email, $pass) ;
}