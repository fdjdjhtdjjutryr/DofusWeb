<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $nombre_mision=$_POST["nombre_mision"];

    $consulta = "INSERT INTO misiones(nombre_mision) VALUES ('$nombre_mision')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Misiones/Vistas/listar.php");
    exit();
?>