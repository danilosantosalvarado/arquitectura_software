<?php
  session_start();
  require_once("../../conexion.php");

  class empleado extends conexion {
    // ----------------------------------------------------------------
    private $nombre;
    private $clave;
    // ----------------------------------------------------------------

    public function __construct($uname, $upass) {
      $this->db=parent::__construct();
      $this->correoEmpleado=$uname;
      $this->claveEmpleado=$upass;
    }

    public function login() {
      $statement=$this->db->prepare('CALL palogin(:uname, :upass)');
      $statement->bindParam(":uname", $this->correoEmpleado);
      $statement->bindParam(":upass", $this->claveEmpleado);
      $statement->execute();

      if ($statement->rowCount()==1) {
        $consulta=$statement->fetch();
        $_SESSION['nombre']=$consulta['nombreEmpleado'];
        $_SESSION['id']=$consulta['identificacionEmpleado'];
        $_SESSION['cargo']=$consulta['cargoEmpleado'];
        return true;
      } else {
        return false;
      }
    }

    public function salir() {
      session_unset();
      session_destroy();
      header('location:../../index.php');
    }
  }
?>
