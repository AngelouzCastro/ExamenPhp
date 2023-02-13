<?php
/*
aqui se carga el usuario en la vista
y se guarda
*/

include('../Modelo/conexion.php');

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $conexion = new conexion();
    $conexion->conectar();
    $consulta = "SELECT * FROM usuario WHERE id = $id";
    $resultado = $conexion->ejecutarConsulta($consulta);

    if(mysqli_num_rows($resultado) == 1) {
        $row = mysqli_fetch_array($resultado);
        $first_name = $row['first_name'];
        $last_name = $row['last_name'];
        $adress = $row['adress'];
        $conexion->desconectar();
    }

    if (isset($_POST['update'])) {
        $id = $_GET['id'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];
        $adress = $_POST['adress'];

        $consulta = "UPDATE usuario set first_name='$first_name', last_name='$last_name', adress='$adress' WHERE id = $id";
        $conexion = new conexion();
        $conexion->conectar();
        $conexion->ejecutarConsulta($consulta);
        $conexion->desconectar();


        $_SESSION['message'] = 'Usuario Actualizado';
        $_SESSION['message_type'] = 'primary';
        
        header('Location: ../index.php');
    }
}

?>