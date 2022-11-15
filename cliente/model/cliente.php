<?php
  require_once("../../conexion.php");

  class cliente extends conexion {
    // ----------------------------------------------------------------
    private $idCliente;
    private $nombreCliente;
    private $apellidoCliente;
    private $telefonoCliente;
    private $direccionCliente;
    private $corrreoCliente;
    // ----------------------------------------------------------------

    public function __construct($uname, $upass) {
      $this->db=parent::__construct();
    }

    public function get() {
			$rows=null;
      $statement=$this->db->prepare('SELECT * FROM cliente;');
			$statement->execute();
      while ($result=$statement->fetch()) {
				$rows[]=$result;
			}
			return $rows;
    }

		public function getId($id) {
			$rows=null;
      $statement=$this->db->prepare('SELECT * FROM cliente WHERE identicacionCliente=:id;');
			$statement->execute(':id', $id);
      while ($result=$statement->fetch()) {
				$rows[]=$result;
			}
			return $rows;
    }

		public function add($idCliente, $nombreCliente, $apellidoCliente, $telefonoCliente, $direccionCliente, $corrreoCliente) {
      $statement=$this->db->prepare('INSERT INTO cliente VALUE (
				:idCliente,
				:nombreCliente,
				:apellidoCliente,
				:telefonoCliente,
				:direccionCliente,
				:corrreoCliente
			);');
			$statement->bindParam(":idCliente", $idCliente);
			$statement->bindParam(":nombreCliente", $nombreCliente);
			$statement->bindParam(":apellidoCliente", $apellidoCliente);
			$statement->bindParam(":telefonoCliente", $telefonoCliente);
			$statement->bindParam(":direccionCliente", $direccionCliente);
			$statement->bindParam(":corrreoCliente", $corrreoCliente);
			$add->$statement->execute();
			if ($add) {
				return true;
			} else {
				return false;
			}
    }

		public function edit($idCliente, $nombreCliente, $apellidoCliente, $telefonoCliente, $direccionCliente, $corrreoCliente) {
			$rows=null;
      $statement=$this->db->prepare('UPDATE cliente SET
				nombreCliente=:nombreCliente,
				apellidoCliente=:apellidoCliente,
				telefonoCliente=:telefonoCliente,
				direccionCliente=:direccionCliente,
				corrreoCliente=:corrreoCliente
				WHERE identificacionCliente=:idCliente;'
			);
			$statement->bindParam(":idCliente", $idCliente);
			$statement->bindParam(":nombreCliente", $nombreCliente);
			$statement->bindParam(":apellidoCliente", $apellidoCliente);
			$statement->bindParam(":telefonoCliente", $telefonoCliente);
			$statement->bindParam(":direccionCliente", $direccionCliente);
			$statement->bindParam(":corrreoCliente", $corrreoCliente);
			$edit->$statement->execute();
			if ($edit) {
				return true;
			} else {
				return false;
			}
    }

		public function delete($idCliente) {
			$rows=null;
      $statement=$this->db->prepare('DELETE FROM cliente WHERE identificacionCliente=:idCliente;');
			$statement->bindParam(":idCliente", $idCliente);
			$delete->$statement->execute();
			if ($delete) {
				return true;
			} else {
				return false;
			}
    }
  }
?>
