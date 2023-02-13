<div class="col-md-4">
    <?php if (isset($_SESSION['message'])) { ?>
        <div class="alert alert-<?=
            $_SESSION['message_type']; ?> alert-dismissible fade show" role="alert">
                <?= $_SESSION['message'] ?>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
            <?php session_unset(); 
            } ?>
            
            <div class="car card-body">
                <form action="../../ExamenPhp/Controlador/guardar-usuario.php" method="POST">
                    <div class="formgroup mb-2">
                        <input type="text" name="first_name" class="form-control" placeholder="Nombre" autofocus required>
                    </div>
                    <div class="formgroup mb-2">
                        <input type="text" name="last_name" class="form-control" placeholder="Apellido" required>
                    </div>
                    <div class="formgroup mb-2">
                    <textarea name="adress" rows="2" class="form-control" placeholder="Direción"></textarea>
                    </div>
                        <input type="submit" class="btn btn-success btn-block mb-2" name="guardar-usuario" value="guardar usuario">
                </form>
            </div>
</div>
        
  