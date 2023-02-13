<?php
include_once('../Modelo/conexion.php');

/*
aqui se mandan las consultas a la conexion con la base de datos
utilizando la clase de usuario como plantilla
*/
class opUsuario {
    private $conexion;

    function __construc() {

    }

    public function guardarUsuario($usuario) {
        $consulta = "INSERT INTO usuario (first_name, last_name, adress) VALUES ('". $usuario->getFirst_name() ."', '". $usuario->getLast_name() ."' , '" .$usuario->getAdress(). "')";
        $conexion = new conexion();
        $conexion->conectar();
		$conexion->ejecutarConsulta($consulta);
		$conexion->desconectar();
    }

    public function eliminarUsuario($id) {
        $consulta = "DELETE FROM usuario WHERE id =" . $id . ";";
        $conexion = new conexion();
        $conexion->conectar();
		$conexion->ejecutarConsulta($consulta);
		$conexion->desconectar();
    }   
    
}
?>