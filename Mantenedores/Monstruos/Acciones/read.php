<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT * FROM monstruo_byc";
$resultado = mysqli_query($conexion, $consulta);

?>