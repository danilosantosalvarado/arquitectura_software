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
    <title>Getion de Clientes</title>
  </head>
  <body>
    <h1>Clientes Registrados</h1>
    <ul>
      <li><a href="../../menu.php">Inicio</a></li>
      <li><a href="add.php">Agregar</a></li>
    </ul>
    <hr>
    <table border="1">
      <tr>
        <th id="">Identificación</th>
        <th id="">Nombre</th>
        <th id="">Apellido</th>
        <th id="">Teléfono</th>
        <th id="">Dirección</th>
        <th id="">Correo</th>
        <?php
          if ($_SESSION['cargo'] == 'Administrador') {
        ?>
          <th colspan=2 id=""> Acciones</th>
        <?php
          }
        ?>
      </tr>
      <?php
        $datos=$objetCliente->get();
        if ($datos != null) {
          foreach ($datos as $dato) {
      ?>
        <tr>
          <td><?php echo $dato['identificacionCliente'];?></td>
          <td><?php echo $dato['nombreCliente'];?></td>
          <td><?php echo $dato['apellidoCliente'];?></td>
          <td><?php echo $dato['telefonoCliente'];?></td>
          <td><?php echo $dato['direccionCliente'];?></td>
          <td><?php echo $dato['correoCliente'];?></td>
          <?php
            if ($_SESSION['cargo'] == 'Administrador') {
          ?>
            <td> <a href="edit.php?id=<?php echo $dato['identificacionCliente'];?>">Editar</a></td>
            <td> <a href="delete.php?id=<?php echo $dato['identificacionCliente'];?>">Eliminar</a></td>
          <?php
            }
          ?>
        </tr>
      <?php
          }
        }
      ?>

    </table>
  </body>
</html>
