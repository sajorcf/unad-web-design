<?php
class Db{
  public $conn;

  public function conn(){
    $vars = (include '../config/env.php');
    $this->conn = null;
    try{
      $this->conn = new PDO("mysql:host=".$vars['bd']['host'].";dbname=".$vars['bd']['database'], $vars['bd']['user'], $vars['bd']['password']);
      $this->conn->exec("set names utf8");
    }catch(PDOException $ex){
      echo "Connection error: ".$ex->getMessage();
    }
    return $this->conn;
  }
}
?>