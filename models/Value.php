<?php 

require_once 'db.php';

class Value extends Database{

  public $table = 'vals';

  public function getValAtt($cat){
    $sql = "SELECT * FROM $this->table WHERE aid = '$cat'";
    $stmt = $this->squery($sql);
    $products = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $products;
  }

  public function createVal($name, $cat){
    $sql = "INSERT INTO $this->table (name, aid) VALUES ('$name', '$cat')";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: attr.php');
    }
  }

  public function deleteVal($id){
    $sql = "DELETE FROM $this->table WHERE id = '$id'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: attr.php');
    }
  }

  public function deleteValAll($id){
    $sql = "DELETE FROM $this->table WHERE aid = '$id'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: attr.php');
    }
  }

}