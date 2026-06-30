<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";

$consultaMonstruo = "SELECT id_mounstruo, nombre_byc FROM monstruo_byc";
$resultadoMonstruo = mysqli_query($conexion,$consultaMonstruo);

$consultaRecursos = "SELECT id_recurso, nombre_recurso FROM recursos";
$resultadoRecursos = mysqli_query($conexion,$consultaRecursos);
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Agregar Recurso de Busqueda y Captura</h2>
                </div>
                <form action="../Acciones/create.php" method="POST">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del Monstruo</label>
                        <select name="id_mounstruo" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoMonstruo)){ ?>

                                <option value="<?= $fila['id_mounstruo'] ?>">
                                    <?= $fila['nombre_byc'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del Recurso</label>
                        <select name="id_recurso" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoRecursos)){ ?>

                                <option value="<?= $fila['id_recurso'] ?>">
                                    <?= $fila['nombre_recurso'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nivel del Oficio</label>
                        <input type="number" name="cantidad_recurso" class="form-control" id="cantidad_recurso" placeholder="Cantidad" required>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Recurso</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>