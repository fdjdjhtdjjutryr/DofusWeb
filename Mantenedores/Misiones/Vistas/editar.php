<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_mision=$_GET["id_mision"];
$consulta = "SELECT m.id_mision,l.id_logro,l.nombre_logro,m.nombre_mision
            FROM misiones m JOIN logros l ON m.id_logro = l.id_logro
            WHERE m.id_mision='$id_mision'";
            
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_mision=$row["id_mision"];
    $id_logro=$row["id_logro"];
    $nombre_logro=$row["nombre_logro"];
    $nombre_mision=$row["nombre_mision"];
}

$consultaLogros = "SELECT id_logro, nombre_logro FROM logros";
$resultadoLogros = mysqli_query($conexion,$consultaLogros);

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
                    <h2>Editar Clase</h2>
                </div>
                <form action="../Acciones/update.php" method="POST" >
                    <div class="row align-items-start">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Id de la Mision</label>
                            <input type="text" name="id_mision"  value="<?php echo $id_mision ?>" class="form-control" id="id_mision" readonly>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Logro</label>
                            <select name="id_logro" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoCuentas)){ ?>

                                <option value="<?= $fila['id_logro'] ?>"
                                    <?= ($fila['id_logro'] == $id_logro) ? "selected" : "" ?>
                                >
                                    <?= $fila['nombre_logro'] ?>
                                </option>

                            <?php } ?>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la Mision</label>
                            <input type="text" name="nombre_mision" class="form-control" id="nombre_mision"  value="<?php echo $nombre_mision ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Mision</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>