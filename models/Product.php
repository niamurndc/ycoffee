<?php 

require_once 'db.php';

class Product extends Database{

  public $table = 'products';

  public function getproducts(){
    $sql = "SELECT * FROM $this->table ORDER BY id desc";
    $stmt = $this->squery($sql);
    $products = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $products;
  }

  public function getProduct($id){
    $sql = "SELECT * FROM $this->table WHERE id = '$id'";
    $stmt = $this->squery($sql);
    $products = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $products;
  }

  public function getProductCat($cat){
    $sql = "SELECT * FROM $this->table WHERE cat = '$cat'";
    $stmt = $this->squery($sql);
    $products = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $products;
  }

  public function getProductOff($off){
    $sql = "SELECT * FROM $this->table WHERE offer = '$off' limit 6";
    $stmt = $this->squery($sql);
    $products = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $products;
  }

  public function createPro($name, $desc, $offer, $price, $cat){
    $sql = "INSERT INTO $this->table (name, price, pdesc, offer, cat) VALUES ('$name', '$price', '$desc', '$offer', '$cat')";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: product.php');
    }
  }

  public function editPro($name, $price, $desc, $offer, $id){
    $sql = "UPDATE $this->table SET name = '$name', price = '$price', pdesc = '$desc', offer = '$offer' WHERE id = $id";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: product.php');
    }
  }

  public function deletePro($id){
    $sql = "DELETE FROM $this->table WHERE id = '$id'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: product.php');
    }
  }

}