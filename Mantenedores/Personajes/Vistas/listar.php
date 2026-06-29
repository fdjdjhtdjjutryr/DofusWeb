<?php
require_once dirname(__DIR__,3) . "/bootstrap.php";
include ROOT_PATH . "/includes/header.php";


include ROOT_PATH . "/Mantenedores/Personajes/Acciones/read.php";
?>
<div class="container-fluid">
    <div class="row">
        <?php
            include ROOT_PATH . "/includes/sidebar.php";
        ?>
        <main class="col-md-10 ms-sm-auto px-4">
            <div class="container align-items-start">
                <div class="text-center">
                    <h2>Listado de Personajes</h2>
                </div>
                
                <a href="agregar.php" class="btn btn-success mb-4">
                    Agregar Personaje
                </a>
                <div class="text-center">
                    <table class="table table-light table-bordered table-hover">

                        <thead>

                            <tr>
                                <th class="col-1">Id Personaje</th>
                                <th class="col-2">Nombre Cuenta</th>
                                <th class="col-2">Nombre Personaje</th>
                                <th class="col-2">Nivel</th>
                                <th class="col-2">Clase</th>
                                <th class="col-2">Acciones</th>
                            </tr>

                        </thead>

                        <tbody>

                            <?php while($fila = mysqli_fetch_assoc($resultado)){ ?>

                                <tr>

                                    <td><?php echo $fila['id_personaje']; ?></td>

                                    <td><?php echo $fila['nombre_cuenta']; ?></td>

                                    <td><?php echo $fila['nombre_personaje']; ?></td>

                                    <td><?php echo $fila['nivel_personaje']; ?></td>

                                    <td><?php echo $fila['nombre_clase']; ?></td>

                                    <td>
                                        
                                        <a
                                            href="editar.php?id_personaje=<?php echo $fila['id_personaje']; ?>"
                                            class="btn btn-warning btn-sm">
                                            Editar
                                        </a>

                                        <a
                                            href="../acciones/delete.php?id_personaje=<?php echo $fila['id_personaje']; ?>"
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