<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";

$id_cuenta=$_GET["id_cuenta"];
$consulta = "SELECT * FROM cuenta WHERE id_cuenta='$id_cuenta'";
$resultado = mysqli_query($conexion,$consulta);
while($row=mysqli_fetch_assoc($resultado)){
    $id_cuenta=$row["id_cuenta"];
    $nombre_cuenta=$row["nombre_cuenta"];
    $apodo_cuenta=$row["apodo_cuenta"];
    $correo_cuenta=$row["correo_cuenta"];
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
                    <h2>Editar Cuenta</h2>
                </div>
                <form action="../Acciones/update.php" method="POST" >
                    <div class="row align-items-start">
                        <div class="col-2">
                            <label for="exampleFormControlInput1" class="form-label">Id de la Cuenta</label>
                            <input type="text" name="id_cuenta"  value="<?php echo $id_cuenta ?>" class="form-control" id="id_cuenta" readonly>
                        </div>
                        <div class="col-3"></div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Nombre de la Cuenta</label>
                            <input type="text" name="nombre_cuenta" class="form-control" id="nombre_cuenta"  value="<?php echo $nombre_cuenta ?>" required>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Apodo de la Cuenta</label>
                            <input type="text" name="apodo_cuenta" class="form-control" id="apodo_cuenta"  value="<?php echo $apodo_cuenta ?>" required>
                        </div>
                        <div class="col-5">
                            <label for="exampleFormControlInput1" class="form-label">Correo de la Cuenta</label>
                            <input type="email" name="correo_cuenta" class="form-control" id="correo_cuenta"  value="<?php echo $correo_cuenta ?>" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn mt-4 btn-primary">Guardar Cuenta</button>
                </form>
                
            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>