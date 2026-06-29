<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_mision = $_POST["id_mision"];
    $nombre_mision=$_POST["nombre_mision"];

    $consulta = "UPDATE misiones SET nombre_mision = '$nombre_mision' WHERE id_mision = '$id_mision';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Misiones/Vistas/listar.php");
    exit();
?>