<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";

$consultaPersonajes = "SELECT id_personaje, nombre_personaje FROM personaje";
$resultadoPersonajes = mysqli_query($conexion,$consultaPersonajes);

$consultaOficios = "SELECT id_oficio, nombre_oficio FROM oficios";
$resultadoOficios = mysqli_query($conexion,$consultaOficios);
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Agregar OFicio a Personaje</h2>
                </div>
                <form action="../Acciones/create.php" method="POST">
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del Personaje</label>
                        <select name="id_personaje" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoPersonajes)){ ?>

                                <option value="<?= $fila['id_personaje'] ?>">
                                    <?= $fila['nombre_personaje'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nombre del Oficio</label>
                        <select name="id_oficio" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoOficios)){ ?>

                                <option value="<?= $fila['id_oficio'] ?>">
                                    <?= $fila['nombre_oficio'] ?>
                                </option>

                            <?php } ?>
                        </select>
                    </div>
                    <div class="col-4">
                        <label for="exampleFormControlInput1" class="form-label">Nivel del Oficio</label>
                        <input type="number" name="nivel_oficio" class="form-control" id="nivel_oficio" placeholder="Nivel del Oficio" required>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Oficio</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>