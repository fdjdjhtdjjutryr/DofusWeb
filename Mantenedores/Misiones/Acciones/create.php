<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_logro=$_POST["id_logro"];
    $nombre_mision=$_POST["nombre_mision"];

    $consulta = "INSERT INTO misiones(id_logro,nombre_mision) VALUES ('$id_logro','$nombre_mision')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Misiones/Vistas/listar.php");
    exit();
?>