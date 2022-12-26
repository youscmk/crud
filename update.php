<?php
require("conexion.php");



if (isset($_GET['id_usuario'])) {
    $id=$_GET['id_usuario'];
   $query="SELECT * FROM usuario WHERE id_usuario='$id'";
   $result= mysqli_query($conn, $query);
   if(mysqli_num_rows($result)==1){
    $row= mysqli_fetch_array($result);
    $fecha= $row['fecha'];
    $latitude=$row['latitude'];
    $longitud=$row['longitud'];
    $e_Acumulada=$row['e_Acumulada'];
    $s_Acumulada=$row['s_Acumulada'];
    $aforo=$row['aforo'];
    $direccion_usuario=$row['direccion_usuario'];


   }
    Header("Location: index.php");
}

if(isset($_POST['update'])){
    $id=$_GET['id_usuario'];
    $fecha=$_POST['fecha'];
    $latitude=$_POST['latitude'];
    $longitud=$_POST['longitud'];
    $e_Acumulada=$_POST['e_Acumulada'];
    $s_Acumulada=$_POST['s_Acumulada'];
    $aforo=$_POST['aforo'];
    $direccion_usuario=$_POST['direccion_usuario'];

    $sql = "UPDATE usuario SET id_usuario='$id', fecha='$fecha', latitude='$latitude', longitud='$longitud', e_Acumulada='$e_Acumulada', s_Acumulada='$s_Acumulada', aforo='$aforo', direccion_usuario='$direccion_usuario' WHERE id_usuario='$id'";
    $actualizar = $mysqli->query($sql);
    header("Location: index.php");



}


?>
 <?php
                            $sql = "SELECT * FROM usuario";
                            $listar = $mysqli->query($sql);


                            foreach ($listar as $fila) {
                            ?>

                      
                          <?php
                            }
                            ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <form action="update.php?id="<?php echo $_GET['id']; ?> method="POST">
        <input type="datetime" name="fecha" value="<?php echo $fila['id_usuario']; ?>">
            <input type="datetime" name="fecha" value="<?php echo $fila['fecha']; ?>">
            <input type="text" name="latitude" value="<?php echo $fila['latitude']; ?>">
            <input type="text" name="longitud" value="<?php echo $fila['longitud']; ?>">
            <input type="number" name="e_Acumulada" value="<?php echo $fila['e_Acumulada']; ?>">
            <input type="number" name="s_Acumulada" value="<?php echo $fila['s_Acumulada']; ?>">
            <input type="number" name="aforo" value="<?php echo $fila['aforo']; ?>">
            <input type="text" name="direccion_usuario" value="<?php echo $fila['direccion_usuario']; ?>">
            <button class="btn btn-success" name="update" id="update"> Editar</button>
            <th> <a class="btn btn-danger" href="delete.php?id=<?php echo $fila['id_usuario'] ?>&eliminar=<?php echo $fila['id_usuario']; ?>">Eliminar</a> </th>

            <a href="index.php">  Volver</a>







        
        </form>
    </div>
</body>

</html>