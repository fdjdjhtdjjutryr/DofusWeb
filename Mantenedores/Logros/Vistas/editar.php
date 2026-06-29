<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_logro=$_GET["id_logro"];
$consulta = "SELECT * FROM logros WHERE id_logro='$id_logro'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_logro=$row["id_logro"];
    $nombre_logro=$row["nombre_logro"];
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
                    <h2>Editar Logro</h2>
                </div>
                <form action="../Acciones/update.php" method="POST" >
                    <div class="row align-items-start">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Id del Logro</label>
                            <input type="text" name="id_logro"  value="<?php echo $id_logro ?>" class="form-control" id="id_logro" readonly>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre del Logro</label>
                            <input type="text" name="nombre_logro" class="form-control" id="nombre_logro"  value="<?php echo $nombre_logro ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Logro</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>