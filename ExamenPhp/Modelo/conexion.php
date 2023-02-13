<?php
/*
Estableciendo conexion con la base de datos
servidor a donde se va a conectar y datos de axeso
*/
session_start();
class conexion {
    private $servidor;
    private $usuario;
    private $contrasena;
    private $dataBase;
    private $conexion;

    function __construct() {
        $this->servidor = 'localhost';
        $this->usuario = 'root';
        $this->contrasena = '';
        $this->dataBase = 'db_usuario';
    }

    //probando la conexion con la base de datos
    public function conectar(){
	    $this->conexion = mysqli_connect($this->servidor, $this->usuario, $this->contrasena, $this->dataBase);
	}

    //aqui se hacen las consultas a la base de datos
    public function ejecutarConsulta($consulta) {
        $resultado = mysqli_query($this->conexion, $consulta) or die (mysli_error($this->conexion));
        if (!$resultado) {
            echo mysqli_error;
            exit;
        }
        return $resultado;
    }

    public function desconectar() {
        mysqli_close($this->conexion);
        $this->conexion = null;
    }
}
?>