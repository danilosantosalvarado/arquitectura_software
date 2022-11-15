<?php
  require_once("../model/cliente.php");
  $objetoCliente=new cliente();

  if ($_POST) {
		$idCliente=$_POST["idCliente"];
  }
  $delete=$objetoCliente->delete($idCliente);
  if ($delete) {
    header("location:../view/index.php");
  } else {
    header('location:../view/add.php');
  }
?>
