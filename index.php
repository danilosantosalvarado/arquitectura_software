<?php
  session_start();
  $err=isset($_GET['Error']);
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesion</title>
  </head>
  <body>
    <h1>Inicio de Sesion</h1>
    <hr>
    <form method="POST" action="empleado/controller/login.php">
      <label for="un">Usuario</label>
      <br>
      <input type="text" id="un" name="uname" placeholder="Ingrese con su corrreo registrado"><br>
      <label for="up">Clave:</label><br>
      <input type="password" id="up" name="upass" placeholder="Ingrese su clave de usuario"><br>
      <?php
        if ($err) {
          echo "<p> Usuario y/o contraseña incorrectas.</p>";
        }
      ?>
      <input type="submit" value="Ingresar">
    </form>
  </body>
</html>
