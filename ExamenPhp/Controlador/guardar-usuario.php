<?php
include_once('../Modelo/usuario-class.php');
include_once('../Modelo/conexion.php');
include_once('../Controlador/guardar-usuario.php');
include_once('../Controlador/operaciones-usuario.php');
/*
esta parte compunica a la vista del usuario con el controlador 
*/
if(isset($_POST['guardar-usuario'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $adress = $_POST['adress'];

    $usuario = new usuario();
    $usuario->setFirst_name($first_name);
    $usuario->setLast_name($last_name);
    $usuario->setAdress($adress);

    $op_usuario = new opUsuario();
    $op_usuario->guardarUsuario($usuario);

    
} 

    $_SESSION['message'] = 'Usuario Graudado';
    $_SESSION['message_type'] = 'success';

    header('Location: ../index.php');
?>