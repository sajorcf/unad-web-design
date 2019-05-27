<?php
require '../models/db.php';
require '../models/user.php';

$db = new Db();
$user = new User($db->conn());
$listadoUsuarios = $user->obtenerUsuarios();

include '../views/listado-usuarios.phtml';
?>