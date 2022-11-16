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
      <ul>
        <li><a href="../../menu.php">Inicio</a></li>
        <li><a href="add.php">Agregar</a></li>
      </ul>
      <hr>
    </div>
    <div>
      <form method="post" action="../controller/add.php">
        <label for="idc">No de Identificación:</label>
        <input type="text" id="idc" name="idCliente">
        </br>
        <label for="nc">Nombres:</label>
        <input type="text" id="nc" name="nombreCliente">
        </br>
        <label for="ac">Apellidos:</label>
        <input type="text" id="ac" name="apellidoCliente">
        </br>
        <label for="tc">Teléfono:</label>
        <input type="text" id="tc" name="telefonoCliente">
        </br>
        <label for="dc">Dirección:</label>
        <input type="text" id="dc" name="direccionCliente">
        </br>
        <label for="cc">Correo:</label>
        <input type="email" id="cc" name="correoCliente">
        </br>
        <input type="submit" value="agregar">
      </form>
    </div>
  </body>
</html>
