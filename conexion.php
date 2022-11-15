<?php
  class conexion {
    // ----------------------------------------------------------------
    protected $db;
    private $driver="mysql";
    private $host="localhost";
    private $port=3306;
    private $dbname="proyectoejemplo";
    private $usuario="root";
    private $clave="master";
    // ----------------------------------------------------------------

    public function __construct() {
      try {
        $db=new PDO("{$this->driver}:host={$this->host};dbname={$this->dbname};port={$this->port}", $this->usuario, $this->clave);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $db;
      } catch(PDOException $e) {
        echo "No se pudo establecer la conexión con la base de datos: ". $e->getMessage();
      }
    }
  }
?>
