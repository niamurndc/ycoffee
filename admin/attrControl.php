<?php 
include '../models/Attr.php';
include '../models/Value.php';

if(isset($_POST['addattr'])){
  $name = $_POST['name'];
  $cat = $_POST['cat'];
  echo 'submitattr';
  $attr = new Attr;
  $attr->createAttr($name, $cat);
}


if(isset($_POST['addval'])){
  $name = $_POST['name'];
  $cat = $_POST['cat'];
  echo 'submitval';
  $val = new Value;
  $val->createVal($name, $cat);
}

if(isset($_GET['id']) || isset($_GET['action'])){
  if($_GET['action'] == 'adelete'){
    $id = $_GET['id'];
    $attrd = new Attr;

    $attrd->deleteAttr($id);

    $valued = new Value;

    $valued->deleteValAll($id);
  }
}

if(isset($_GET['id']) || isset($_GET['action'])){
  if($_GET['action'] == 'vdelete'){
    $id = $_GET['id'];
    $valued = new Value;

    $valued->deleteVal($id);
  }
}

