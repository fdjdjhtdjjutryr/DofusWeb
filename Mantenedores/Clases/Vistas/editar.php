<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_clase=$_GET["id_clase"];
$consulta = "SELECT * FROM clase WHERE id_clase='$id_clase'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_clase=$row["id_clase"];
    $nombre_clase=$row["nombre_clase"];
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
                            <label for="exampleFormControlInput1" class="form-label">Id de la Clase</label>
                            <input type="text" name="id_clase"  value="<?php echo $id_clase ?>" class="form-control" id="id_clase" readonly>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la Clase</label>
                            <input type="text" name="nombre_clase" class="form-control" id="nombre_clase"  value="<?php echo $nombre_clase ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Clase</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>