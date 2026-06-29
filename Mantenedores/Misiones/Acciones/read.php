<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT m.id_mision,l.nombre_logro,m.nombre_mision
            FROM misiones m JOIN logros l ON m.id_logro = l.id_logro";
$resultado = mysqli_query($conexion, $consulta);

?>