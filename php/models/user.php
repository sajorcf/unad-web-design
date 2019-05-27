<?php
class User{
  private $nombre;
  private $apellido;
  private $correo;
  private $telefono;
  private $fecha_nacimiento;
  private $conn;

  public function __construct($conn){
    $this->conn = $conn;
  }

  public function obtenerUsuarios(){
    $respuesta = [];
    $sql = "SELECT nombre, apellido, correo, telefono, fecha_nacimiento FROM unad_users";
    $query = $this->conn->prepare($sql);
    if($query->execute()){
      if($query->rowCount()){
        while($row = $query->fetch(PDO::FETCH_ASSOC)){
          $respuesta[] = $row;
        }
      }
    }
    return $respuesta;
  }
}
?>