<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";

$consultaClases = "SELECT id_clase, nombre_clase FROM clase";
$resultadoClases = mysqli_query($conexion,$consultaClases);

$consultaCuentas = "SELECT id_cuenta, nombre_cuenta FROM cuenta";
$resultadoCuentas = mysqli_query($conexion,$consultaCuentas);
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Agregar Personaje</h2>
                </div>
                <form action="../Acciones/create.php" method="POST">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre de la Cuenta</label>
                        <select name="id_cuenta" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoCuentas)){ ?>

                                <option value="<?= $fila['id_cuenta'] ?>">
                                    <?= $fila['nombre_cuenta'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del Personaje</label>
                        <input type="text" name="nombre_personaje" class="form-control" id="nombre_personaje" placeholder="Nombre del Personaje" required>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nivel del Personaje</label>
                        <input type="number" name="nivel_personaje" class="form-control" id="nivel_personaje" placeholder="Nivel del Personaje" required>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre de la Clase</label>
                        <select name="id_clase" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoClases)){ ?>

                                <option value="<?= $fila['id_clase'] ?>">
                                    <?= $fila['nombre_clase'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Personaje</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>