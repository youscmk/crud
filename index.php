  <?php
    require("conexion.php");
    ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <title></title>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="style.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
      <style>
          #miTablaPersonalizada th {
              width: 100px;

              border: 1px solid;
          }


          th {
              text-align: center;
          }

          table {
              table-layout: fixed;
              border: 1px solid;


          }

          body {
              background: rgb(3, 10, 70);
              background: linear-gradient(90deg, rgba(3, 10, 70, 1) 8%, rgba(0, 212, 255, 1) 28%, rgba(3, 3, 64, 1) 63%, rgba(0, 212, 255, 1) 100%);
              height: 100%;
          }

          #contenedor {
              display: flex;
              justify-content: center;
          }
      </style>
  </head>

  <body>


      <div class="container mt-5 ml-5">
          <div class="row">

              <div class="col-md-3" style="text-align: center" ;>
                  <h1 style="color:aliceblue;"><b>Datos:</b></h1>
                  <?php
                    $sql = "SELECT * FROM usuario";
                    $listar = $mysqli->query($sql);


                    foreach ($listar as $fila) {
                    ?>
                  <?php
                    }
                    ?>

                  <form action="insert.php" method="POST">

                      <input type="number" class="form-control mb-3" readonly="readonly" value="<?php echo $fila['id_usuario'] + 1; ?>" maxlength="20" name="id_usuario" id="id_usuario" placeholder="ID">

                      <?php
                        date_default_timezone_set("America/Santiago");
                        $fecha_actual = date("Y-m-d H:i:s");
                        ?>
                      <input type="datetime" readonly="readonly" class="form-control mb-3" name="fecha" id="fecha" value="<?= $fecha_actual ?>">


                      <div id="map">


                          <input type="button" onclick="findMe()" value="Mostrar ubicación" name="coordenadas" id="coordenadas">

                      </div>
                      <br>



                      <script>
                          function findMe() {
                              var output = document.getElementById('map');



                              //Obtenemos latitud y longitud
                              function localizacion(posicion) {
                                  var latitude = posicion.coords.latitude;
                                  var longitude = posicion.coords.longitude;





                                  output.innerHTML = "<p><label><b><u>Coordenadas:</u></b></label><br><b>Latitud:</b> " + "<input type='text' class='form-control mb-3'  name='latitude' id='latitude' value=" + latitude + ">" + "   <b>Longitud: </b> " + "<input type='text' class='form-control mb-3' name='longitud' id='longitud'value=" + longitude + ">" + "</p>";


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
                      <input type="submit" class="btn btn-primary" id="btnEnviar" name="btnEnviar">





                  </form>

              </div>
              <div class="col-md-8">
                  <br>
                  <table class="table">
                      <thead class="table-info table-striped">
                          <tr id="miTablaPersonalizada">
                              <th style="width: 45px;text-align: center;">Id</th>
                              <th style="width: 115px;text-align: center;">Fecha</th>
                              <th style="text-align: center;">Latitud</th>
                              <th style="text-align: center;">Longitud</th>
                              <th style="text-align: center;"> Entrada acumulada</th>
                              <th style="text-align: center;">Salida acumulada</th>
                              <th style="text-align: center;">Aforo</th>
                              <th style="width: 180px;text-align: center;">Dirección</th>
                              <th></th>
                              <th></th>


                          </tr>

                      </thead>

                      <tbody class="table-light">
                          <?php
                            $sql = "SELECT * FROM usuario";
                            $listar = $mysqli->query($sql);


                            foreach ($listar as $fila) {
                            ?>

                              <tr>

                                  <th> <?php echo $fila['id_usuario']; ?> </th>
                                  <th style="text-align: center;"> <?php echo $fila['fecha']; ?> </th>
                                  <th> <?php echo $fila['latitude']; ?> </th>
                                  <th> <?php echo $fila['longitud']; ?> </th>
                                  <th> <?php echo $fila['e_Acumulada']; ?> </th>
                                  <th> <?php echo $fila['s_Acumulada']; ?> </th>
                                  <th> <?php echo $fila['aforo']; ?> </th>
                                  <th> <?php echo $fila['direccion_usuario']; ?> </th>

                                  <th><a href="actualizar.php?id=<?php echo $fila['id_usuario'] ?>" class="btn btn-success" name="btnEditar" id="btnEditar"> Editar</a></th>
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