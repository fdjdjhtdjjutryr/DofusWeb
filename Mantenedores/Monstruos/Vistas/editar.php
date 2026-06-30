<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_mounstruo=$_GET["id_mounstruo"];
$consulta = "SELECT * FROM monstruo_byc WHERE id_mounstruo='$id_mounstruo'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_mounstruo = $row["id_mounstruo"];
    $nombre_byc=$row["nombre_byc"];
    $nivel_byc=$row["nivel_byc"];
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
                            <label for="exampleFormControlInput1" class="form-label">Id Monstruo</label>
                            <input type="text" name="id_mounstruo"  value="<?php echo $id_mounstruo ?>" class="form-control" id="id_mounstruo" readonly>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Monstruo</label>
                            <input type="text" name="nombre_byc" class="form-control" id="nombre_byc"  value="<?php echo $nombre_byc ?>" required>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nivel del Monstruo</label>
                            <input type="number" name="nivel_byc" class="form-control" id="nivel_byc"  value="<?php echo $nivel_byc ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Monstruo</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>