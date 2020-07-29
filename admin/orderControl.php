<?php
require '../models/Cart.php';

if(isset($_GET['id']) || isset($_GET['action'])){
  if($_GET['action'] == 'edit'){
    $id = $_GET['id'];
    $order = new Cart;
    $order->editCartComp($id);
  }
}