<?php

require_once dirname(__DIR__,3) . "/bootstrap.php";

$consulta = "SELECT * FROM personaje";
$resultado = mysqli_query($conexion, $consulta);

?>