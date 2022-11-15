<?php
  require_once("../model/cliente.php");
  $objetoCliente=new cliente();

  if ($_POST) {
		$idCliente=$_POST["idCliente"];
		$nombreCliente=$_POST["nombreCliente"];
    $apellidoCliente=$_POST["apellidoCliente"];
    $telefonoCliente=$_POST["telefonoCliente"];
    $direccionCliente=$_POST["direccionCliente"];
    $correoCliente=$_POST["correoCliente"];
	}
  $edit=$objetoCliente->edit($idCliente, $nombreCliente, $apellidoCliente, $telefonoCliente, $direccionCliente, $correoCliente);
  if ($edit) {
    header("location:../view/index.php");
  } else {
    header('location:../view/add.php');
  }
?>
