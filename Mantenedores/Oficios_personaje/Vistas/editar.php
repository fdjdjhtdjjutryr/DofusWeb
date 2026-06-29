<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
$id_personaje=$_GET["id_personaje"];
$id_oficio=$_GET["id_oficio"];
$consulta = "SELECT op.id_personaje,
                    op.id_oficio,
                    op.nivel_oficio,
                    p.nombre_personaje,
                    o.nombre_oficio
            FROM oficio_personaje op JOIN personaje p ON op.id_personaje = p.id_personaje
                                    JOIN oficios o ON op.id_oficio = o.id_oficio
WHERE op.id_personaje ='$id_personaje' AND op.id_oficio ='$id_oficio'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_personaje=$row["id_personaje"];
    $id_oficio=$row["id_oficio"];
    $nombre_personaje=$row["nombre_personaje"];
    $nivel_oficio=$row["nivel_oficio"];
    $nombre_oficio=$row["nombre_oficio"];
}
$consultaPersonajes = "SELECT id_personaje, nombre_personaje FROM personaje";
$resultadoPersonajes = mysqli_query($conexion,$consultaPersonajes);

$consultaOficios = "SELECT id_oficio, nombre_oficio FROM oficios";
$resultadoOficios = mysqli_query($conexion,$consultaOficios);

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
                    <h2>Editar Oficio</h2>
                </div>
                <form action="../Acciones/update.php" method="POST" >
                    <div class="row align-items-start">
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Personaje</label>
                            <select name="id_personaje" class="form-select">
                                <?php while($fila = mysqli_fetch_assoc($resultadoPersonajes)){ ?>

                                    <option value="<?= $fila['id_personaje'] ?>"
                                    <?= ($fila['id_personaje'] == $id_personaje) ? "selected" : "" ?>
                                    >
                                        <?= $fila['nombre_personaje'] ?>
                                    </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Oficio</label>
                            <select name="id_oficio" class="form-select" >
                                <?php while($fila = mysqli_fetch_assoc($resultadoOficios)){ ?>

                                    <option value="<?= $fila['id_oficio'] ?>"
                                    <?= ($fila['id_oficio'] == $id_oficio) ? "selected" : "" ?>
                                    >
                                        <?= $fila['nombre_oficio'] ?>
                                    </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Nivel del Oficio</label>
                            <input type="number" name="nivel_oficio" class="form-control" id="nivel_oficio" value="<?php echo $nivel_oficio ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Personaje</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>