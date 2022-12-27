<?php
require("conexion.php");


$id_usuario = $_GET['id'];

$sql = "SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
$query = mysqli_query($mysqli, $sql);

$fila = mysqli_fetch_array($query);


if (isset($_POST['AHHHH'])) {
    include("updete.php");
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
    <style>
        label {
            display: inline-block;
            width: 100px
        }

        .butt {
            display: block;
        }
    </style>
    <title>Actualizar</title>
</head>

<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-5">
                <h1>Datos:</h1>


                <form action="actualizar.php?id=<?php echo $fila['id_usuario'] ?>" method="POST">
                    <label><b>ID:</b></label>
                    <input type="number" class="form-control mb" name="id_usuario" readonly="readonly" value="<?php echo $fila['id_usuario']; ?>">
                    <label><b>FECHA:</b></label>
                    <input type="datetime" class="form-control mb" name="fecha" readonly="readonly" value="<?php echo $fila['fecha']; ?>"><br>
                    <label><b>LATITUDE:</b></label>
                    <input type="text" class="form-control mb" name="latitude" value="<?php echo $fila['latitude']; ?>">
                    <label><b>LONGITUD:</b></label>
                    <input type="text" class="form-control mb" name="longitud" value="<?php echo $fila['longitud']; ?>"><br>
                    <label><b>ENTRADA ACUMULADA:</b></label>
                    <input type="number" class="form-control mb" name="e_Acumulada" value="<?php echo $fila['e_Acumulada']; ?>">
                    <label><b>SALIDA ACUMULADA:</b></label>
                    <input type="number" class="form-control mb"name="s_Acumulada" value="<?php echo $fila['s_Acumulada']; ?>"><br>
                    <label><b>AFORO:</b></label>
                    <input type="number" class="form-control mb" name="aforo" value="<?php echo $fila['aforo']; ?>">
                    <label><b>DIRECCIÓN:</b></label>
                    <input type="text" class="form-control mb" name="direccion_usuario" value="<?php echo $fila['direccion_usuario']; ?>"><br>

                    <input type="submit" id="butt" name="AHHHH" class="btn btn-success" value="Actualizar">

                    <a href="index.php" id="butt"> Volver</a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>