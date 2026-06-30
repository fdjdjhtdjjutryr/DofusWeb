<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT rb.id_recurso,rb.id_mounstruo,rb.cantidad_recurso,
                    r.nombre_recurso,
                    m.nombre_monstruo
            FROM recurso_byc rb JOIN recursos r ON rb.id_recurso = r.id_recurso 
                                JOIN monstruo_byc m ON rb.id_mounstruo  = m.id_mounstruo ";
$resultado = mysqli_query($conexion, $consulta);

?>