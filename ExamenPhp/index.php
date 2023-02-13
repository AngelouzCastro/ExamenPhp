<?php include_once('./Modelo/conexion.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--estilos de bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    
</head>
<body>
    <?php include('./Vista/header.php'); ?>
    <div class="container p-4">
        <div class="row">
        <?php include('./Vista/usuario-component.php'); ?>
        <div class="col-md-8">
            <?php include('./Vista/tabla-usuarios.php'); ?>
        </div>
        </div>
    </div>
    

    <!--scrips para funcionalidad de animaciones -->
    <?php include_once('./includes/footers.php'); ?>
</body>
</html>