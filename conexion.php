<?php
//Conexion clase MYSQL
// $objetoconexion = new MYSQLI(servidor, usuario, password, basedatos);
$mysqli = new MYSQLI('localhost', 'root', '', 'masgps');
if($mysqli->connect_errno > 0 ){
  die("Error en la conexión " . $mysqli->connect_error);
}
