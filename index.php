  <?php
    require("conexion.php");
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <title></title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
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


      <div class="container mt-5">
          <div class="row">

              <div class="col-md-3">
                  <h1>Ingrese datos:</h1>
                  <form action="insert.php" method="POST">
                      <input type="number" class="form-control mb-3" value="<?php echo $id ?>" maxlength="20" name="id_usuario" id="id_usuario" placeholder="ID">

                      <?php
                        date_default_timezone_set("America/Santiago");
                        $fecha_actual = date("Y-m-d H:i:s");
                        ?>
                      <input type="datetime" class="form-control mb-3" name="fecha" id="fecha" value="<?= $fecha_actual ?>">


                      <div id="map">


                          <input type="button" onclick="findMe()" value="Mostrar ubicación" name="coordenadas" id="coordenadas">

                      </div>



                      <script>
                          function findMe() {
                              var output = document.getElementById('map');



                              //Obtenemos latitud y longitud
                              function localizacion(posicion) {
                                  var latitude = posicion.coords.latitude;
                                  var longitude = posicion.coords.longitude;





                                  output.innerHTML = "<p><label><b>Coordenadas:</b></label><br>Latitud: " + "<input type='text' class='form-control mb-3'  style='width:232px;height:35px;' name='latitude' id='latitude' value=" + latitude + ">" + "   Longitud: " + "<input type='text' class='form-control mb-3' name='longitud' id='longitud'value=" + longitude + ">" + "</p>";


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

                      <input type="number" class="form-control mb-3" placeholder="Entrada acumulada" name="e_Acumulada" id="e_Acumulada">


                      <input type="number" class='form-control mb-3' placeholder="Salida acumulada" name="s_Acumulada" id="s_Acumulada">


                      <input type="number" class="form-control mb-3" placeholder="Aforo" name="aforo" id="aforo">

                      <input type="text" class="form-control mb-3" placeholder="Dirección" name="direccion_usuario" id="direccion_usuario">
                      <input type="submit"  class="btn btn-primary" id="btnEnviar" name="btnEnviar">


                     


                  </form>
              </div>
              <div class="col-md-8">

                  <table class="table">
                      <thead class="table-success table-striped">
                          <tr>
                              <th>Id</th>
                              <th>Fecha</th>
                              <th>Latitud</th>
                              <th>Longitud</th>
                              <th>E. acumulada</th>
                              <th>S. acumulada</th>
                              <th>Aforo</th>
                              <th>Dirección</th>
                              <th></th>
                              <th></th>

                          </tr>

                      </thead>

                      <tbody>
                          <?php
                            $sql = "SELECT * FROM usuario";
                            $listar = $mysqli->query($sql);


                            foreach ($listar as $fila) {
                            ?>

                              <tr>
                                  <th> <?php echo $fila['id_usuario']; ?> </th>
                                  <th> <?php echo $fila['fecha_actual']; ?> </th>
                                  <th> <?php echo $fila['latitude']; ?> </th>
                                  <th> <?php echo $fila['longitud']; ?> </th>
                                  <th> <?php echo $fila['entrada_Acumulada']; ?> </th>
                                  <th> <?php echo $fila['salida_Acumulada']; ?> </th>
                                  <th> <?php echo $fila['aforo']; ?> </th>
                                  <th> <?php echo $fila['direccion']; ?> </th>

                                  <th><a href="actualizar.php?id=<?php echo $fila['id_usuario'] ?>" class="btn btn-info" name,id="btnEditar"> Editar</a></th>
                                  <th> <a class="btn btn-danger" href="delete.php?id=<?php echo $fila['id_usuario'] ?>&eliminar=<?php echo $fila['id_usuario']; ?>">Eliminar</a> </th>



                              </tr>
                          <?php
                            }
                            ?>

                      </tbody>

                  </table>

              </div>


          </div>

      </div>


  </body>

  </html>