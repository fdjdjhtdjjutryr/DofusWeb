<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_oficio=$_GET["id_oficio"];
$consulta = "SELECT * FROM oficios WHERE id_oficio='$id_oficio'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_oficio=$row["id_oficio"];
    $nombre_oficio=$row["nombre_oficio"];
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
                    <h2>Editar Oficio</h2>
                </div>
                <form action="../Acciones/update.php" method="POST" >
                    <div class="row align-items-start">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Id del Oficio</label>
                            <input type="text" name="id_oficio"  value="<?php echo $id_oficio ?>" class="form-control" id="id_oficio" readonly>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Oficio</label>
                            <input type="text" name="nombre_oficio" class="form-control" id="nombre_oficio"  value="<?php echo $nombre_oficio ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Oficio</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>