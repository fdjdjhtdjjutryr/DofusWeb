<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT * FROM oficios";
$resultado = mysqli_query($conexion, $consulta);

?>