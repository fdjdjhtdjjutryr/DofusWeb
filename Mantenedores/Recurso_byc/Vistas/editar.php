<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
$id_recurso=$_GET["id_recurso"];
$id_mounstruo=$_GET["id_mounstruo"];
$consulta = "SELECT rb.id_recurso,rb.id_mounstruo,rb.cantidad_recurso,
                    r.nombre_recurso,
                    m.nombre_byc
            FROM recurso_byc rb JOIN recursos r ON rb.id_recurso = r.id_recurso 
                                JOIN monstruo_byc m ON rb.id_mounstruo  = m.id_mounstruo
WHERE rb.id_recurso ='$id_recurso' AND rb.id_mounstruo ='$id_mounstruo'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_recurso=$row["id_recurso"];
    $id_mounstruo = $row["id_mounstruo"];
    $cantidad_recurso = $row["cantidad_recurso"];
    
    $nombre_recurso=$row["nombre_recurso"];
    $nombre_byc=$row["nombre_byc"];
}
$consultaMonstruo = "SELECT id_mounstruo, nombre_byc FROM monstruo_byc";
$resultadoMonstruo = mysqli_query($conexion,$consultaMonstruo);

$consultaRecursos = "SELECT id_recurso, nombre_recurso FROM recursos";
$resultadoRecursos = mysqli_query($conexion,$consultaRecursos);

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
                    <h2>Editar Recurso</h2>
                </div>
                <form action="../Acciones/update.php" method="POST" >
                    <div class="row align-items-start">
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Nombre Monstruo</label>
                            <select name="id_mounstruo" class="form-select">
                                <?php while($fila = mysqli_fetch_assoc($resultadoMonstruo)){ ?>

                                    <option value="<?= $fila['id_mounstruo'] ?>"
                                    <?= ($fila['id_mounstruo'] == $id_mounstruo) ? "selected" : "" ?>
                                    >
                                        <?= $fila['nombre_byc'] ?>
                                    </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Nombre Recurso</label>
                            <select name="id_recurso" class="form-select" >
                                <?php while($fila = mysqli_fetch_assoc($resultadoRecursos)){ ?>

                                    <option value="<?= $fila['id_recurso'] ?>"
                                    <?= ($fila['id_recurso'] == $id_recurso) ? "selected" : "" ?>
                                    >
                                        <?= $fila['nombre_recurso'] ?>
                                    </option>

                                <?php } ?>
                            </select>
                        </div>
                        <div class="col-4">
                            <label for="exampleFormControlInput1" class="form-label">Nivel del Oficio</label>
                            <input type="number" name="cantidad_recurso" class="form-control" id="cantidad_recurso" value="<?php echo $cantidad_recurso ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Recurso</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>