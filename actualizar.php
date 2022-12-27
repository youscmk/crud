<?php
require("conexion.php");


$id_usuario = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
$query = mysqli_query($mysqli, $sql);

$fila = mysqli_fetch_array($query);
?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar</title>
</head>

<body>
    <div class="container mt-5">
        <form action="updete.php?id=<?php echo $fila['id_usuario'] ?>" method="POST">
            <input type="number" name="id_usuario" readonly="readonly" value="<?php echo $fila['id_usuario']; ?>">

            <input type="datetime" name="fecha" readonly="readonly" value="<?php echo $fila['fecha']; ?>">
            <input type="text" name="latitude" value="<?php echo $fila['latitude']; ?>">
            <input type="text" name="longitud" value="<?php echo $fila['longitud']; ?>">
            <input type="number" name="e_Acumulada" value="<?php echo $fila['e_Acumulada']; ?>">
            <input type="number" name="s_Acumulada" value="<?php echo $fila['s_Acumulada']; ?>">
            <input type="number" name="aforo" value="<?php echo $fila['aforo']; ?>">
            <input type="text" name="direccion_usuario" value="<?php echo $fila['direccion_usuario']; ?>">

            <input type="submit" class="btn btn-success" value="Actualizar">
            <th> <a class="btn btn-danger" href="delete.php?id=<?php echo $fila['id_usuario'] ?>&eliminar=<?php echo $fila['id_usuario']; ?>">Eliminar</a> </th>

            <a href="index.php"> Volver</a>








        </form>
    </div>
</body>

</html>