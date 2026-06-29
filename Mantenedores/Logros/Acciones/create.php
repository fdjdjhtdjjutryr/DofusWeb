<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $nombre_logro=$_POST["nombre_logro"];

    $consulta = "INSERT INTO logros(nombre_logro) VALUES ('$nombre_logro')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Logros/Vistas/listar.php");
    exit();
?>