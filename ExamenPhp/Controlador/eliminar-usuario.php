<?php
include_once('../Modelo/usuario-class.php');
include_once('../Modelo/conexion.php');
include_once('../Controlador/guardar-usuario.php');
include_once('../Controlador/operaciones-usuario.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];

    $usuario = new usuario();
    $usuario->setId($id);

    $op_usuario = new opUsuario();
    $op_usuario->eliminarUsuario($id);

    
} 

    $_SESSION['message'] = 'Usuario Eliminado';
    $_SESSION['message_type'] = 'danger';

    header('Location: ../index.php');
?>