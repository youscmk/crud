<?php 
require("conexion.php");

    $id=$_POST['id_usuario'];
    $fecha=$_POST['fecha'];
    $latitude=$_POST['latitude'];
    $longitud=$_POST['longitud'];
    $e_Acumulada=$_POST['e_Acumulada'];
    $s_Acumulada=$_POST['s_Acumulada'];
    $aforo=$_POST['aforo'];
    $direccion_usuario=$_POST['direccion_usuario'];

    $sql = "UPDATE usuario SET fecha='$fecha', latitude='$latitude', longitud='$longitud', e_Acumulada='$e_Acumulada', s_Acumulada='$s_Acumulada', aforo='$aforo', direccion_usuario='$direccion_usuario' WHERE id_usuario='$id'";
    $actualizar = mysqli_query($mysqli , $sql);

    if($actualizar){
        header("Location: index.php");

    }

?>