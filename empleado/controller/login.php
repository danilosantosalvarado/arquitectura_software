<?php
	require_once("../model/empleado.php");

	if ($_POST) {
		$nombreUsuario=$_POST["uname"];
		$claveUsuario=$_POST["upass"];

		$objetoEmpleado=new empleado($nombreUsuario, $claveUsuario);
		$login=$objetoEmpleado->login();

		if ($login) {
			header("location:../../menu.php");
		} else {
			header('location:../../index.php?Error="error"');
			exit();
		}
	}
?>
