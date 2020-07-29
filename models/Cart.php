<?php 

require_once 'db.php';

class Cart extends Database{

  public $table = 'cart';

  public function getcarts(){
    $sql = "SELECT * FROM $this->table ORDER BY id desc";
    $stmt = $this->squery($sql);
    $orders = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $orders;
  }

  public function getCart($id, $stat){
    $sql = "SELECT * FROM $this->table WHERE uid = '$id' AND stat = '$stat'";
    $stmt = $this->squery($sql);
    $order = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $order;
  }

  public function getCartUser($id, $stat){
    $sql = "SELECT * FROM $this->table WHERE username = '$id' AND stat = '$stat'";
    $stmt = $this->squery($sql);
    $order = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $order;
  }

  public function getCartStat($stat){
    $sql = "SELECT * FROM $this->table WHERE stat = '$stat' ORDER BY time desc";
    $stmt = $this->squery($sql);
    $order = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $order;
  }

  public function getCartId($stat){
    $sql = "SELECT * FROM $this->table WHERE id = '$stat'";
    $stmt = $this->squery($sql);
    $order = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $order;
  }

  public function createCart($uid, $desc, $amount, $name, $price){
    $sql = "INSERT INTO $this->table (uid, pdesc, amount, name, price) VALUES ('$uid', '$desc', '$amount', '$name', '$price')";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: cart.php');
    }
  }

  public function editCart($sid, $hname, $add, $username, $email, $pm, $stat){
    $sql = "UPDATE $this->table SET cname = '$hname', address = '$add', username = '$username', email = '$email', payment = '$pm', stat = '$stat' WHERE uid = '$sid'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: index.php');
    }
  }

  public function editCartComp($id){
    $sql = "UPDATE $this->table SET comp = '1' WHERE id = '$id'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: index.php');
    }
  }

  public function deleteCart($id){
    $sql = "DELETE FROM $this->table WHERE id = '$id'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: cart.php');
    }
  }

  public function deleteCartAll($id){
    $sql = "DELETE FROM $this->table WHERE uid = '$id'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: logout.php');
    }
  }

}