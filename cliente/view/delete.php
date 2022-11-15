<?php
  require_once("../../empleado/model/empleado.php");
  require_once("../model/cliente.php");

  if ($_SESSION['id'] == null) {
    header('location:../../index.php');
  }
  $id=$_GET['id'];
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar Clientes</title>
  </head>
  <body>
    <div class="cabecera">
      <h1>Eliminar Cliente</h1>
      <a href="../../menu.php">Inicio- </a>
      <a href="index.php">Agregar</a>
      <hr>
    </div>
    <div>
      <p>Seguro desea eliminar los datos del cliente</p>
      <form method="post" action="../controller/delete.php">
        <input type="email" id="idc" name="idCliente" hidden="" value='<?php echo $id;?>'>
        <input type="submit" value="Eliminar">
      </form>
    </div>
  </body>
</html>
