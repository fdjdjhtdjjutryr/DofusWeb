<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_personaje=$_GET["id_personaje"];
$consulta = "SELECT p.id_personaje,p.id_cuenta,p.id_clase,
                    c.nombre_cuenta AS nombre_cuenta,
                    p.nombre_personaje,
                    p.nivel_personaje,
                    cl.nombre_clase AS nombre_clase
            FROM personaje p JOIN cuenta c ON p.id_cuenta=c.id_cuenta 
                            JOIN clase cl ON p.id_clase = cl.id_clase
                                WHERE p.id_personaje='$id_personaje'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_personaje=$row["id_personaje"];
    $id_cuenta=$row["id_cuenta"];
    $id_clase=$row["id_clase"];
    $nombre_cuenta=$row["nombre_cuenta"];
    $nombre_personaje=$row["nombre_personaje"];
    $nivel_personaje=$row["nivel_personaje"];
    $nombre_clase=$row["nombre_clase"];
}
$consultaClases = "SELECT id_clase, nombre_clase FROM clase";
$resultadoClases = mysqli_query($conexion,$consultaClases);

$consultaCuentas = "SELECT id_cuenta, nombre_cuenta FROM cuenta";
$resultadoCuentas = mysqli_query($conexion,$consultaCuentas);

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
                    <h2>Editar Personaje</h2>
                </div>
                <form action="../Acciones/update.php" method="POST" >
                    <div class="row align-items-start">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Id del Personaje</label>
                            <input type="text" name="id_personaje"  value="<?php echo $id_personaje ?>" class="form-control" id="id_personaje" readonly>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la Cuenta</label>
                            <select name="id_cuenta" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoCuentas)){ ?>

                                <option value="<?= $fila['id_cuenta'] ?>"
                                    <?= ($fila['id_cuenta'] == $id_cuenta) ? "selected" : "" ?>
                                >
                                    <?= $fila['nombre_cuenta'] ?>
                                </option>

                            <?php } ?>
                            </select>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Personaje</label>
                            <input type="text" name="nombre_personaje" class="form-control" id="nombre_personaje"  value="<?php echo $nombre_personaje ?>" required>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nivel del personaje</label>
                            <input type="number" name="nivel_personaje" class="form-control" id="nivel_personaje"  value="<?php echo $nivel_personaje ?>" required>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Clase</label>
                            <select name="id_clase" class="form-select">
                            <?php while($fila = mysqli_fetch_assoc($resultadoClases)){ ?>

                                <option value="<?= $fila['id_clase'] ?>"
                                    <?= ($fila['id_clase'] == $id_clase) ? "selected" : "" ?>
                                >
                                    <?= $fila['nombre_clase'] ?>
                                </option>

                            <?php } ?>
                            </select>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Personaje</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>