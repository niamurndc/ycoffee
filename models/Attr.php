<?php 

require_once 'db.php';

class Attr extends Database{

  public $table = 'attrs';

  public function getattrs(){
    $sql = "SELECT * FROM $this->table ORDER BY id desc";
    $stmt = $this->squery($sql);
    $attrs = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $attrs;
  }

  public function getAttrCat($cat){
    $sql = "SELECT * FROM $this->table WHERE cat = '$cat'";
    $stmt = $this->squery($sql);
    $products = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $products;
  }

  public function createAttr($name, $cat){
    $sql = "INSERT INTO $this->table (name, cat) VALUES ('$name', '$cat')";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: attr.php');
    }
  }

  public function deleteAttr($id){
    $sql = "DELETE FROM $this->table WHERE id = '$id'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: attr.php');
    }
  }

}