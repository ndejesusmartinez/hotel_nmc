<?php
require "conexion.php";

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$f_entrada=$_POST['f_entrada'];
$f_salida=$_POST['f_salida'];
$correo=$_POST['correo'];
$identificacion=$_POST['identificacion'];
$telefono=$_POST['telefono'];

$sql="insert into reservas(nombres,apellidos, f_entrada, f_salida, correo, identificacion, telefono)values('$_REQUEST[nombres]','$_REQUEST[apellidos]','$_REQUEST[f_entrada]','$_REQUEST[f_salida]','$_REQUEST[correo]','$_REQUEST[identificacion]','$_REQUEST[telefono]')";
if (mysqli_query($conn, $sql)) {
      ?>
      <script type="text/javascript">
        alert("Reservacion Exitosa"); window.location='../reservas.html';
      </script>
      <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
