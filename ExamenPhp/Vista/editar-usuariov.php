<?php include('../Controlador/editar-usuario.php'); ?>
<?php
include("../includes/header.php");
include ("./header.php");
?>
<div class="container p-4">
    <div class="row">
        <div class="col-md-4 mx-auto">
            <div class="card card-body">
                <form action="../Controlador/editar-usuario.php?id=<?php echo $_GET['id'];?>" method="POST">
                    <div class="form-group mb-2">
                        <input type="text" name="first_name" value="<?php echo $first_name?>" class="form-control" placeholder="Nombre" autofocus required>
                    </div>
                    <div class="form-group mb-2">
                        <input type="text" name="last_name" value="<?php echo $last_name?>" class="form-control" placeholder="Apellidos" required>
                    </div>
                    <div class="form-group mb-2">
                        <textarea name="adress" rows="2" class="form-control" placeholder="direción"><?php echo $adress?></textarea>
                    </div>
                    <button class="btn btn-success" name="update">
                        Actualizar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>


<?php include('../includes/footers.php'); ?>
