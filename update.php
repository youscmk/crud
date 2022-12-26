<?php
require("conexion.php");



if (isset($_POST['btnEditar'])) {

    $id_usuario = $_POST['id_usuario'];
    $fecha = $_POST['fecha']; //fecha y hora deben salir automaticas
    $lati = $_POST['latitude']; //separar en longitud y latitud y que sea en varchar(10)
    $long = $_POST['longitud']; //separar en longitud y latitud y que sea en varchar(10)
    $eA = $_POST['e_Acumulada'];
    $sA = $_POST['s_Acumulada'];
    $a = $_POST['aforo'];
    $d = $_POST['direccion_usuario'];




    $sql = "UPDATE usuario SET fecha='$fecha', latitude='$lati', longitud='$long', e_Acumulada='$eA', s_Acumalada='$sA', aforo='$a', direccion_usuario='$d' WHERE id_usuario='$id'";
    $actualizar = $mysqli->query($sql);
} 
?>