<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";


include ROOT_PATH . "/Mantenedores/Misiones/Acciones/read.php";
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Listado de Misiones</h2>
                </div>
                
                <a href="agregar.php" class="btn btn-success mb-4">
                    Agregar Mision
                </a>
                <div class="text-center">
                    <table class="table table-light table-bordered table-hover">

                        <thead>

                            <tr>
                                <th class="col-1">ID</th>
                                <th class="col-1">Logro</th>
                                <th class="col-4">Nombre Mision</th>
                                <th class="col-2">Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

                                <tr>

                                    <td><?php echo $fila['id_mision']; ?></td>

                                    <td><?php echo $fila['nombre_logro']; ?></td>

                                    <td><?php echo $fila['nombre_mision']; ?></td>

                                    <td>
                                        
                                        <a
                                            href="editar.php?id_mision=<?php echo $fila['id_mision']; ?>"
                                            class="btn btn-warning btn-sm">
                                            Editar
                                        </a>

                                        <a
                                            href="../acciones/delete.php?id_mision=<?php echo $fila['id_mision']; ?>"
                                            class="btn btn-danger btn-sm">
                                            Eliminar
                                        </a>
    
                                        

                                        
                                    </td>

                                </tr>

                            <?php } ?>

                        </tbody>

                    </table>
                </div>

                

            </div>
        </main>

    </div>
    
</div>


<?php include ROOT_PATH . "/includes/footer.php"; ?>