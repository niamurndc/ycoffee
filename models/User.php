<?php 

require_once 'db.php';

class User extends Database{

  public $table = 'users';

  public function getusers(){
    $sql = "SELECT * FROM $this->table";
    $stmt = $this->squery($sql);
    $users = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $users;
  }

  public function getuser($uname){
    $sql = "SELECT * FROM $this->table WHERE username = '$uname'";
    $stmt = $this->squery($sql);
    $users = mysqli_fetch_all($stmt, MYSQLI_ASSOC);
    return $users;
  }

  public function checkUser($uname){
    $sql = "SELECT * FROM $this->table WHERE username = '$uname'";
    $stmt = $this->squery($sql);
    $result = mysqli_num_rows($stmt);
    return $result;
  }

  public function checkUserLogin($uname, $pass){
    $sql = "SELECT * FROM $this->table WHERE username = '$uname' AND password = '$pass'";
    $stmt = $this->squery($sql);
    $result = mysqli_num_rows($stmt);
    return $result;
  }

  public function createUser($name, $uname, $email, $pass){
    $sql = "INSERT INTO $this->table (name, username, email, password) VALUES ('$name', '$uname', '$email', '$pass')";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: login.php');  
    }
  }

  public function editUser($name, $uname, $email, $pass){
    $sql = "UPDATE $this->table SET name = '$name', email = '$email', password = '$pass' WHERE username = '$uname'";
    $stmt = $this->squery($sql);
    if($stmt){
      header('location: profile.php');  
    }
  }

}

