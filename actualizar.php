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
            border: 1px solid;
            color: white;
        }

        .form input {
            width: 50%;
            height: 35px;
            margin: 0.4rem;
        }

        .form button {
            padding: 0.5em 1em;
            border: none;
            background: rgb(100, 200, 255);
            cursor: pointer;
        }

        .form label {
            height: 10px;

        }

        form {
            border: 2px double;
        }


        body {
            background: rgb(235, 239, 255);
            background: radial-gradient(circle, rgba(235, 239, 255, 1) 0%, rgba(44, 157, 25, 1) 73%);

            background-repeat: repeat;

        }
        #map{
            border: 2px double;
            color: red;
        }
    </style>
    <title>Actualizar</title>
</head>

<body>
    <div class="container mt-5">


        <form class="form" action="actualizar.php?id=<?php echo $fila['id_usuario'] ?>" method="POST">
            <h1 style="text-align: center;color: black;">Modificar datos:</h1>
            <label style="color: black;"><b>ID:</b></label>
            <input type="number" class="form-control mb" name="id_usuario" readonly="readonly" value="<?php echo $fila['id_usuario']; ?>">
            <label style="color: black;"><b>FECHA:</b></label>
            <input type="datetime" class="form-control mb" name="fecha" readonly="readonly" value="<?php echo $fila['fecha']; ?>">
            <label style="color: black;"><b>LATITUDE:</b></label>
            <input type="text" class="form-control mb" name="latitude" value="<?php echo $fila['latitude']; ?>">
            <label style="color: black;"><b>LONGITUD:</b></label>
            <input type="text" class="form-control mb" name="longitud" value="<?php echo $fila['longitud']; ?>">
            <div id="map">


                <b><input style="width: 150px;" type="button" onclick="findMe()" value="Ver mi ubicación" name="coordenadas" id="coordenadas"></b>

            </div>
            <script>
                function findMe() {
                    var output = document.getElementById('map');



                    //Obtenemos latitud y longitud
                    function localizacion(posicion) {
                        var latitude = posicion.coords.latitude;
                        var longitude = posicion.coords.longitude;





                        output.innerHTML = "<p style='text-align:center';><label style='color:black;'><b><u>Coordenadas</u>[ACTUAL]:</b></label><br><b style='color:black;'>Latitud:</b> " + "<input style='width:180px;'  type='text' readonly='readonly' class='form-control mb-3'  name='latitude' id='latitude' value=" + latitude + ">" + "   <b style='color:black;'>Longitud: </b> " + "<input style='width:180px;' type='text' readonly='readonly' class='form-control mb-3' name='longitud' id='longitud'value=" + longitude + ">" + "</p>";


                        // output.innerHTML = "<input><p>Latitud: " + latitude + "<br>Longitud: " + longitude + "</p>";


                        /* var imgURL = "https://maps.googleapis.com/maps/api/staticmap?center=" + latitude + "," + longitude +
                             "&size=600x300&markers=color:red%7C" + latitude + "," + longitude +
                             "&key=AIzaSyAV90zLzFb8ERCPhuGiLtzD8iuRKg3Quwo"; */

                        //  output.innerHTML = "<img src ='" + imgURL + "'>";



                    }


                    function error() {
                        output.innerHTML = "<p>No se pudo obtener tu ubicación</p>";

                    }

                    navigator.geolocation.getCurrentPosition(localizacion, error);

                }
            </script>

            <label style="color: black;"><b>ENTRADA ACUMULADA:</b></label>
            <input type="number" class="form-control mb" name="e_Acumulada" value="<?php echo $fila['e_Acumulada']; ?>">
            <label style="color: black;"><b>SALIDA ACUMULADA:</b></label>
            <input type="number" class="form-control mb" name="s_Acumulada" value="<?php echo $fila['s_Acumulada']; ?>">
            <label style="color: black;"><b>AFORO:</b></label>
            <input type="number" class="form-control mb" name="aforo" value="<?php echo $fila['aforo']; ?>">
            <label style="color: black;"><b>DIRECCIÓN:</b></label>
            <input type="text" class="form-control mb-1" name="direccion_usuario" value="<?php echo $fila['direccion_usuario']; ?>">
            <div>
                <input style="height: 35px;width: 100px;" type="submit" id="butt" name="AHHHH" class="btn btn-success" value="Actualizar">

                <a href="index.php" style="height: 35px;width: 100px;" class="btn btn-danger" id="butt"> Volver</a>
            </div>
        </form>


</body>

</html>