<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT m.id_mapa,
                    m.id_mounstruo,
                    m.nombre_mapa,
                    m.numero_de_piezas,
                    mb.nombre_byc
            FROM mapa_byc m JOIN monstruo_byc mb ON m.id_mounstruo = mb.id_mounstruo ";
$resultado = mysqli_query($conexion, $consulta);

?>