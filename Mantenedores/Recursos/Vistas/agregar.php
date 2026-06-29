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
                    <h2>Agregar Recurso</h2>
                </div>
                <form class="container" action="../Acciones/create.php" method="POST">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del recurso</label>
                        <input type="text" name="nombre_recurso" class="form-control" id="nombre_recurso" placeholder="Nombre del Recurso" required>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">XP Mascota</label>
                        <input type="number" name="xp_recurso" class="form-control" id="xp_recurso" placeholder="XP Mascota" >
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Tasa Conversion de pepitas</label>
                        <input type="number" name="tasa_conversion" class="form-control" id="tasa_conversion" placeholder=" Tasa Conversion Pepitas" >
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nivel del recurso</label>
                        <input type="number" name="nivel_recurso" class="form-control" id="nivel_recurso" placeholder="Nivel del recurso" required>
                    </div>
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Recurso</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>