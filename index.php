  <?php
    require("conexion.php");
    ?>
  <!DOCTYPE html>
  <html lang="en">
//index
  <head>
      <title></title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet">
      <style>
          label {
              display: inline-block;
              width: 100px;
          }

          #map {
              margin: 20px;
          }
      </style>
  </head>

  <body>
      <form action="insert.php" method="post">

          <div class="form-group">
              <label>Id:</label>
              <input type="number" value="<?php $id ?>" maxlength="20" name="id_usuario" id="id_usuario">
          </div>
          <?php
            date_default_timezone_set("America/Santiago");
            $fecha_actual = date("Y-m-d H:i:s");

            ?>
          <div class="form-group">
              <label>Fecha:</label>
              <input type="datetime" name="fecha" id="fecha" value="<?= $fecha_actual ?>" style="width:172px;">
          </div>

          <div class="form-group" id="map">


              <input type="button" onclick="findMe()" value="Mostrar ubicación" maxlength="20" name="coordenadas" id="coordenadas">

          </div>



          <script>
              function findMe() {
                  var output = document.getElementById('map');



                  //Obtenemos latitud y longitud
                  function localizacion(posicion) {
                      var latitude = posicion.coords.latitude;
                      var longitude = posicion.coords.longitude;





                      output.innerHTML = "<p><label>Coordenadas:</label>Latitud: " + "<input type='text' name='latitude' id='latitude' value=" + latitude + ">" + "<br>   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;Longitud: " + "<input type='text' name='longitud' id='longitud'value=" + longitude + ">" + "</p>";


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


          <div class="form-group">
              <label>E. acumulada:</label>
              <input type="number" placeholder="Introduzca correo" maxlength="40" name="e_Acumulada" id="e_Acumulada">
          </div>
          <div class="form-group">
              <label>S. acumulada:</label>
              <input type="number" placeholder="Introduzca correo" maxlength="40" name="s_Acumulada" id="s_Acumulada">
          </div>
          <div class="form-group">
              <label>Aforo:</label>
              <input type="number" placeholder="Introduzca correo" maxlength="40" name="aforo" id="aforo">
          </div>
          <div class="form-group">
              <label>Dirección:</label>
              <input type="text" placeholder="Introduzca correo" maxlength="40" name="direccion_usuario" id="direccion_usuario">
          </div>

          <input type="submit" name="btnEnviar" id="btnEnviar" value="Enviar" />
          <td> <a href="delete.php">Eliminar</a> </td>


      </form>



  </body>

  </html>