<?php 

require "../models/Product.php";



if(isset($_POST['addpro'])){

  $name = $_POST['name'];
  $price = $_POST['price'];
  $desc = $_POST['desc'];
  $offer = $_POST['offer'];
  $cat = $_POST['capp'];

  $product = new Product;

  $product->createPro($name, $desc, $offer, $price, $cat); 
}

if(isset($_GET['id']) || isset($_GET['action'])){
  if($_GET['action'] == 'delete'){
    $id = $_GET['id'];
    $product = new Product;

    $product->deletePro($id);
  }
}

if(isset($_POST['editpro'])){
  $name = $_POST['name'];
  $price = $_POST['price'];
  $desc = $_POST['desc'];
  $offer = $_POST['offer'];
  $id = $_GET['id'];
  $product = new Product;

  if($offer == null){
    $offe = 0;
    $product->editPro($name, $price, $desc, $offe, $id);
  }else{
    $product->editPro($name, $price, $desc, $offer, $id);
  }

  
}
