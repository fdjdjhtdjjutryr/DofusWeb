<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_recurso=$_GET["id_recurso"];
$consulta = "SELECT * FROM recursos WHERE id_recurso='$id_recurso'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_recurso = $_POST["id_recurso"];
    $nombre_recurso=$_POST["nombre_recurso"];
    $xp_recurso=$_POST["xp_recurso"];
    $tasa_conversion=$_POST["tasa_conversion"];
    $nivel_recurso=$_POST["nivel_recurso"];
}

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
                            <label for="exampleFormControlInput1" class="form-label">Id Recurso</label>
                            <input type="text" name="id_recurso"  value="<?php echo $id_recurso ?>" class="form-control" id="id_recurso" readonly>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre Recurso</label>
                            <input type="text" name="nombre_recurso" class="form-control" id="nombre_recurso"  value="<?php echo $nombre_recurso ?>" required>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la Clase</label>
                            <input type="number" name="nombre_clase" class="form-control" id="nombre_clase"  value="<?php echo $nombre_clase ?>" >
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la Clase</label>
                            <input type="number" name="nombre_clase" class="form-control" id="nombre_clase"  value="<?php echo $nombre_clase ?>" >
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la Clase</label>
                            <input type="number" name="nombre_clase" class="form-control" id="nombre_clase"  value="<?php echo $nombre_clase ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Clase</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>