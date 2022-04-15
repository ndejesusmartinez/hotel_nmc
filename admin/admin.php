<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Admin || Hotel Sol Del Mar</title>
    <link rel="stylesheet" href="../estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src=".././app.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  </head>
  <body>
  <div class="container">
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="./admin.php">HOTEL SOL DEL MAR</a>
      <a class="navbar-brand" href="./reservas.html">REALIZAR RESERVAS</a>
      <a class="navbar-brand" href="./consultas.html">CONSULTAR RESERVAS</a>
      <a class="navbar-brand" href="../login.html">SALIR</a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      </div>
    </nav>

    <div class="usuarios">
      <h2>usuarios activos en la base de datos</h2>
      <div class="cont">

      <?php
      require ".././controlador/conexion.php";
      $sql="SELECT * FROM usuarios";
      $resultado=$conn->query($sql);

      ?>
       <table class="tabla-usuarios table table-striped table-bordered">
           <tr>
                <td><center>ID</center></td>
                <td><center>USUARIO</center></td>
                <td><center>PASSWORD</center></td>
           </tr>

       <?php
      while ($datos=$resultado->fetch_array())
       {
       ?>
       <tr>
       <td><center><?php echo $datos['id']?><center></td>
       <td><center><?php echo $datos['usuario']?></center></td>
       <td><center><?php echo $datos['password']?><center></td>
      </tr>
      <?php
       }
      ?>
        </table>
    </div>
    </div>

  </div>

  <div class="container">
    <div id="confirmarReservas">
      <button id="confirmar" class="btn btn-secondary" onclick="confirmar();" >Confimar Reservas</button>
      <button id="finalizar" class="btn btn-secondary" onclick="finalizar();" >Finalizar Reserva</button>
      <div class="resultado" id="resultado">

      </div>
    </div>
  </div>
  </body>
</html>
