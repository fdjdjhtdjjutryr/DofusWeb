<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";


include ROOT_PATH . "/Mantenedores/Recurso_byc/Acciones/read.php";
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Listado de Recursos de Busqueda y Captura</h2>
                </div>
                
                <a href="agregar.php" class="btn btn-success mb-4">
                    Agregar Recurso
                </a>
                <div class="text-center">
                    <table class="table table-light table-bordered table-hover">

                        <thead>

                            <tr>
                                <th class="col-2">Nombre ByC</th>
                                <th class="col-2">Nombre Recurso</th>
                                <th class="col-2">Cantidad</th>
                                <th class="col-2">Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

                                <tr>
                                    <td><?php echo $fila['nombre_byc']; ?></td>
                                    <td><?php echo $fila['nombre_recurso']; ?></td>
                                    <td><?php echo $fila['cantidad_recurso']; ?></td>

                                    <td>
                                        
                                        <a
                                            href="editar.php?id_recurso=<?php echo $fila['id_recurso']; ?>&id_mounstruo=<?= $fila['id_mounstruo'] ?>"
                                            class="btn btn-warning btn-sm">
                                            Editar
                                        </a>

                                        <a
                                            href="../acciones/delete.php?id_recurso=<?php echo $fila['id_recurso']; ?>&id_mounstruo=<?= $fila['id_mounstruo'] ?>"
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