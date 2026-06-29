<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";

$consultaLogros = "SELECT id_logro, nombre_logro FROM logros";
$resultadoLogros = mysqli_query($conexion,$consultaLogros);
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Agregar Mision</h2>
                </div>
                <form action="../Acciones/create.php" method="POST">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre de el Logro</label>
                        <select name="id_logro" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoLogros)){ ?>

                                <option value="<?= $fila['id_logro'] ?>">
                                    <?= $fila['nombre_logro'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre de la Mision</label>
                        <input type="text" name="nombre_mision" class="form-control" id="nombre_mision" placeholder="Nombre de la Mision" required>
                    </div>
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Mision</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>