<?php
  require_once("../../empleado/model/empleado.php");
  require_once("../model/cliente.php");

  if ($_SESSION['id'] == null) {
    header('location:../../index.php');
  }
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
      <form method="post" action="../controller/add.php">
        <label for="idc">No de Identificación:</label><br>
        <input type="text" id="idc" name="idCliente">

        <label for="nc">Nombres:</label><br>
        <input type="text" id="nc" name="nombreCliente">

        <label for="ac">Apellidos:</label><br>
        <input type="text" id="ac" name="apellidoCliente">

        <label for="tc">Teléfono:</label><br>
        <input type="text" id="tc" name="telefonoCliente">

        <label for="dc">Dirección:</label><br>
        <input type="text" id="dc" name="direccionCliente">

        <label for="cc">Correo:</label><br>
        <input type="email" id="cc" name="correoCliente">

        <input type="submit" value="agregar">
      </form>
    </div>
  </body>
</html>
