<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_mapa=$_GET["id_mapa"];
$consulta = "SELECT m.id_mapa,
                    m.id_mounstruo,
                    m.nombre_mapa,
                    m.numero_de_piezas,
                    mb.nombre_byc
            FROM mapa_byc m JOIN monstruo_byc mb ON m.id_mounstruo = mb.id_mounstruo
WHERE m.id_mapa = '$id_mapa'";


$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_mapa=$row["id_mapa"];
    $id_mounstruo = $row["id_mounstruo"];
    $nombre_mapa=$row["nombre_mapa"];
    $numero_de_piezas = $row["numero_de_piezas"];
    $nombre_byc=$row["nombre_byc"];
}
$consultaMonstruos = "SELECT id_mounstruo, nombre_byc FROM monstruo_byc";
$resultadoMonstruos = mysqli_query($conexion,$consultaMonstruos);

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
                    <h2>Editar Mapa</h2>
                </div>
                <form action="../Acciones/update.php" method="POST" >
                    <div class="row align-items-start">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Id del Mapa</label>
                            <input type="text" name="id_mapa"  value="<?php echo $id_mapa ?>" class="form-control" id="id_mapa" readonly>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del ByC</label>
                            <select name="id_mounstruo" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoMonstruos)){ ?>

                                <option value="<?= $fila['id_mounstruo'] ?>"
                                    <?= ($fila['id_mounstruo'] == $id_mounstruo) ? "selected" : "" ?>
                                >
                                    <?= $fila['nombre_byc'] ?>
                                </option>

                            <?php } ?>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Mapa</label>
                            <input type="text" name="nombre_mapa" class="form-control" id="nombre_mapa"  value="<?php echo $nombre_mapa ?>" required>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Numero de piezas</label>
                            <input type="number" name="numero_de_piezas" class="form-control" id="numero_de_piezas"  value="<?php echo $numero_de_piezas ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Mapa</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>