<?php
  require_once("../../empleado/model/empleado.php");
  require_once("../model/cliente.php");

  if ($_SESSION['id'] == null) {
    header('location:../../index.php');
  }
  $id=$_GET['id'];
  $objetCliente = new cliente();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Clientes</title>
  </head>
  <body>
    <div class="cabecera">
      <h1>Agregar nuevo Cliente</h1>
      <a href="../../menu.php">Inicio- </a>
      <a href="index.php">Agregar</a>
      <hr>
    </div>
    <div>
      <form method="post" action="../controller/edit.php">
        <?php
          $datos=$objetCliente->getId($id);
          if ($datos != null) {
            foreach ($datos as $dato) {
        ?>
        <label for="idc">No de Identificación: <?php echo $dato['identificacionCliente']; ?></label><br>
        <input type="text" id="idc" name="idCliente" value='<?php echo $dato['identificacionCliente'];?>' disabled>

        <label for="nc">Nombres:</label><br>
        <input type="text" id="nc" name="nombreCliente" value='<?php echo $dato['nombreCliente'];?>'>

        <label for="ac">Apellidos:</label><br>
        <input type="text" id="ac" name="apellidoCliente" value='<?php echo $dato['apellidoCliente'];?>'>

        <label for="tc">Teléfono:</label><br>
        <input type="text" id="tc" name="telefonoCliente" value='<?php echo $dato['telefonoCliente'];?>'>

        <label for="dc">Dirección:</label><br>
        <input type="text" id="dc" name="direccionCliente" value='<?php echo $dato['direccionCliente'];?>'>

        <label for="cc">Correo:</label><br>
        <input type="email" id="cc" name="correoCliente" value='<?php echo $dato['correoCliente'];?>'>

        <input type="submit" value="editar">
        <?php
            }
          }
        ?>
      </form>
    </div>
  </body>
</html>
