<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT op.id_personaje,
                    op.id_oficio,
                    op.nivel_oficio,
                    p.nombre_personaje,
                    o.nombre_oficio
            FROM oficio_personaje op JOIN personaje p ON op.id_personaje = p.id_personaje
                                    JOIN oficios o ON op.id_oficio = o.id_oficio";
$resultado = mysqli_query($conexion, $consulta);

?>