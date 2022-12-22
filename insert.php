  
  <?php
  require("conexion.php");


  
  if (isset($_POST['btnEnviar'])) {

    $id = $_POST['id_usuario'];
    $fecha = $_POST['fecha']; //fecha y hora deben salir automaticas
    $lati = $_POST['latitude']; //separar en longitud y latitud y que sea en varchar(10)
    $long = $_POST['longitud']; //separar en longitud y latitud y que sea en varchar(10)
    $eA = $_POST['e_Acumulada'];
    $sA = $_POST['s_Acumulada'];
    $a = $_POST['aforo'];
    $d = $_POST['direccion_usuario'];




    $sql = "INSERT INTO usuario VALUES (NULL, '$fecha', '$lati', '$long', '$eA', '$sA', $a, '$d')";

    $agregar = $mysqli->query($sql);
  }
  if (isset($_POST['eliminar'])) {
    $codEliminar = $_GET['eliminar'];
    $sql = "DELETE FROM usuario WHERE id_usuario = $codEliminar";

    $eliminar = $mysqli->query($sql);
  }



  header("Location: index.php");
  die();
  ?>

  <?php
  require("conexion.php");
  include 'crud.php';

  $fecha = $_POST['fecha'];
  $consulta = "INSERT INTO fecha(fecha_actual) VALUES ('$fecha')";
  $ejecutar  = $mysqli->query($sql, $consulta);
  ?>
