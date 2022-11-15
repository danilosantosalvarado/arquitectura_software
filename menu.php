<?php
  session_start();
  if ($_SESSION['id'] == null) {
    header('location:index.php');
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de facturación</title>
  </head>
  <body>
    <h1> Sistema de facturación</h1>
    <ul>
      <?php
        if ($_SESSION['cargo'] == 'Administrador') {
      ?>
        <li><a href="cliente/view/index.php">Cliente</a></li>
        <li><a href="empleado/view/index.php">Empleados</a></li>
        <!-- <li><a href="facturacionVenta/view/index.php">Facturación</a></li> -->
        <!-- <li><a href="producto/view/index.php">Producto</a></li>  -->
        <!-- <li><a href="proveedor/view/index.php">Proveedor</a></li>  -->
        <li><a href="empleado/controller/exit.php">Salir</a></li>
      <?php
        } else {
          if ($_SESSION['cargo'] == 'Cajero') {
      ?>
        <li><a href="cliente/view/index.php">Cliente</a></li>
        <!-- <li><a href="facturacionVenta/view/index.php">Facturación</a></li> -->
        <!-- <li><a href="producto/view/index.php">Producto</a></li> -->
        <li><a href="empleado/controller/exit.php">Salir</a></li>
      <?php
          }
        }
      ?>
    </ul>
  </body>
</html>
