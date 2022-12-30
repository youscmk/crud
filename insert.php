  <?php
  require("conexion.php");

  $ingreso = "";



  if (isset($_POST['btnEnviar'])) {

    $id = $_POST['id_usuario'];
    $fecha = $_POST['fecha']; //fecha y hora deben salir automaticas
    $lati = $_POST['latitude']; //separar en longitud y latitud y que sea en varchar(10)
    $long = $_POST['longitud']; //separar en longitud y latitud y que sea en varchar(10)
    $eA = $_POST['e_Acumulada'];
    $sA = $_POST['s_Acumulada'];
    $a = $_POST['aforo'];
    $d = $_POST['direccion_usuario'];

   

    $sql = "INSERT INTO usuario VALUES (NULL, '$fecha', '$lati', '$long', '$eA', '$sA', $a, '$d')";}
    
   
    if ($lati == "" || $lati == null || $lati == "null" || $lati === "") {    
      echo '<script>alert("No se han verificado la ubicaciòn...") 
    window.location = "index.php";
    </script>
    ';

    } else {

      $agregar = $mysqli->query($sql);
      $ingreso = "si";
      header("location: index.php?v=si");
      die();
    }
  
?>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>