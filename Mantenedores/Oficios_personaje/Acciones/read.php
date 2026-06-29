<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT * FROM oficio_personaje";
$resultado = mysqli_query($conexion, $consulta);

?>