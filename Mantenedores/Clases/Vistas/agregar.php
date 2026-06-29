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
                    <h2>Agregar Clase</h2>
                </div>
                <form action="../Acciones/create.php" method="POST">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre de la Clase</label>
                        <input type="text" name="nombre_clase" class="form-control" id="nombre_clase" placeholder="Nombre de la Clase" required>
                    </div>
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Clase</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>