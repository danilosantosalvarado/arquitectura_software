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
  $add=$objetoCliente->add($idCliente, $nombreCliente, $apellidoCliente, $telefonoCliente, $direccionCliente, $correoCliente);
  if ($add) {
    header("location:../view/index.php");
  } else {
    header('location:../view/add.php');
  }
?>
