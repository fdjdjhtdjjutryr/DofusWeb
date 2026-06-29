<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Agregar Cuenta</h2>
                </div>
                <form action="../Acciones/create.php" method="POST">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre de la Cuenta</label>
                        <input type="text" name="nombre_cuenta" class="form-control" id="nombre_cuenta" placeholder="Nombre de la Cuenta" required>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Apodo de la Cuenta</label>
                        <input type="text" name="apodo_cuenta" class="form-control" id="apodo_cuenta" placeholder="Apodo de la cuenta" required>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Correo de la Cuenta</label>
                        <input type="email" name="correo_cuenta" class="form-control" id="correo_cuenta" placeholder="Correo de la cuenta" required>
                    </div>
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Cuenta</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>