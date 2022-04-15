<?php
require '.././controlador/conexion.php';
$idReserva=$_REQUEST['idReserva'];

$sql="UPDATE reservas SET reservas.estado = 'confirmada' WHERE reservas.idReserva =$idReserva";
if (mysqli_query($conn, $sql)) {
      ?>
      <script type="text/javascript">
        alert("Confirmaion Exitosa"); window.location='.././admin/admin.php';
      </script>
      <?php
} else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>

 ?>
