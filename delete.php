 <?php
    require("conexion.php");
    //DEBEN ESTAR ESCRITAS COMO EN EL FORMULARIO O HTML

$id_usuario=$_GET['id'];
    if (isset($_GET['eliminar'])) {

        $codELiminar = $_GET['eliminar'];
        $sql = "DELETE FROM usuario WHERE id_usuario = $codELiminar";

        $eliminar = $mysqli->query($sql);
        header("Location: index.php");
    }



    ?>





 <!-- <table border="1" style="display: inline-block;">
     <tr>
         <th>Id</th>
         <th>Fecha</th>
         <th>Latitud</th>
         <th>Longitud</th>
         <th>E. acumulada</th>
         <th>S. acumulada</th>
         <th>Aforo</th>
         <th>Dirección</th>
         <th>Eliminar</th>
         <th>Volver</th>



     </tr>


     <?php
        $i = $_GET['id_usuario'];
        $sql = "SELECT * FROM usuario";
        $listar = $mysqli->query($sql);


        foreach ($listar as $fila) {
        ?>

         <tr>
             <td> <?php echo $fila['id_usuario']; ?> </td>
             <td> <?php echo $fila['fecha_actual']; ?> </td>
             <td> <?php echo $fila['latitude']; ?> </td>
             <td> <?php echo $fila['longitud']; ?> </td>
             <td> <?php echo $fila['entrada_Acumulada']; ?> </td>
             <td> <?php echo $fila['salida_Acumulada']; ?> </td>
             <td> <?php echo $fila['aforo']; ?> </td>
             <td> <?php echo $fila['direccion']; ?> </td>


             <td> <a href="delete.php?id=<?php echo $i ?>&eliminar=<?php echo $fila['id_usuario']; ?>">Eliminar</a> </td>
             <td> <a href="index.php">Volver</a> </td>


         </tr>
     <?php
        }
        ?> 
 </table> -->
 //DEBEN ESTAR ESCRITAS COMO EN LA BASE DE DATOS