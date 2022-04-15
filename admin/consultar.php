<?php
require ".././controlador/conexion.php";

$identificacion=$_POST['identificacion'];

$sql=" SELECT * from reservas WHERE identificacion = '$identificacion'";
$resultado=$conn->query($sql);

?>
 <table width="70%" border="1" align="center">
     <tr>
          <td><center>ID</center></td>
          <td><center>NOMBRES</center></td>
          <td><center>APELLIDOS</center></td>
          <td><center>FECHA DE ENTRADA</center></td>
          <td><center>FECHA DE SALIDA</center></td>
          <td><center>CORREO</center></td>
          <td><center>IDENTIFICACION</center></td>
          <td><center>TELEFONO</center></td>
          <td><center>ESTADO</center></td>
     </tr>

 <?php
while ($datos=$resultado->fetch_array())
 {
 ?>
 <tr>
 <td><center><?php echo $datos['idReserva']?><center></td>
 <td><center><?php echo $datos['nombres']?></center></td>
 <td><center><?php echo $datos['apellidos']?><center></td>
 <td><center><?php echo $datos['f_entrada']?><center></td>
 <td><center><?php echo $datos['f_salida']?><center></td>
 <td><center><?php echo $datos['correo']?><center></td>
 <td><center><?php echo $datos['identificacion']?><center></td>
 <td><center><?php echo $datos['telefono']?><center></td>
 <td><center><?php echo $datos['estado']?><center></td>
</tr>
<?php
 }
?>
  </table>
