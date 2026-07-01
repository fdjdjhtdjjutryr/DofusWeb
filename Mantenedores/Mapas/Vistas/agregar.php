<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";

$consultaMonstruos = "SELECT id_mounstruo, nombre_byc FROM monstruo_byc";
$resultadoMonstruos = mysqli_query($conexion,$consultaMonstruos);
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Agregar Mapa</h2>
                </div>
                <form action="../Acciones/create.php" method="POST">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre ByC</label>
                        <select name="id_mounstruo" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoMonstruos)){ ?>

                                <option value="<?= $fila['id_mounstruo'] ?>">
                                    <?= $fila['nombre_byc'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del Mapa</label>
                        <input type="text" name="nombre_mapa" class="form-control" id="nombre_mapa" placeholder="Nombre del Mapa" required>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Numero de Piezas</label>
                        <input type="number" name="numero_de_piezas" class="form-control" id="numero_de_piezas" placeholder="Numero de Piezas" required>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Mapa</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>