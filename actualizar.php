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
       

        .butt {
            display: block;
        }

        .form {
            width: 100%;
            max-width: 600px;
            margin: 0 auto;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .form input {
            width: 50%;
            height: 30px;
            margin: 0.4rem;
        }

        .form button {
            padding: 0.5em 1em;
            border: none;
            background: rgb(100, 200, 255);
            cursor: pointer;
        }
        .form label{
            height: 10px;
        }
        body{
            background-image: radial-gradient(circle at 60.63% 42.56%, #daed69 0, #c7ea67 12.5%, #aee462 25%, #90da5a 37.5%, #6acc50 50%, #39be48 62.5%, #00b347 75%, #00ab4b 87.5%, #00a753 100%);
            background-repeat: no-repeat;
            height: 969px;
            width: 100%;
        }   
    </style>
    <title>Actualizar</title>
</head>

<body>
     <div>
                <h1 style="text-align: center;">Modificar datos:</h1>


                <form class="form" action="actualizar.php?id=<?php echo $fila['id_usuario'] ?>" method="POST">
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
                    <input type="number" class="form-control mb" name="s_Acumulada" value="<?php echo $fila['s_Acumulada']; ?>"><br>
                    <label><b>AFORO:</b></label>
                    <input type="number" class="form-control mb" name="aforo" value="<?php echo $fila['aforo']; ?>">
                    <label><b>DIRECCIÓN:</b></label>
                    <input type="text" class="form-control mb-1" name="direccion_usuario" value="<?php echo $fila['direccion_usuario']; ?>"><br>

                    <input style="height: 35px;width: 100px;" type="submit" id="butt" name="AHHHH" class="btn btn-success" value="Actualizar">

                    <a href="index.php" id="butt"> Volver</a>
                </form>
     </div>

</body>

</html>