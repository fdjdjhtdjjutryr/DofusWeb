<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT p.id_personaje,c.nombre_cuenta,p.nombre_personaje,p.nivel_personaje,cl.nombre_clase 
            FROM personaje p JOIN cuenta c ON p.id_cuenta=c.id_cuenta 
                            JOIN clase cl ON p.id_clase = cl.id_clase";
$resultado = mysqli_query($conexion, $consulta);

?>