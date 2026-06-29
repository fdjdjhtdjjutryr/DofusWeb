<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_clase = $_POST["id_clase"];
    $nombre_clase=$_POST["nombre_clase"];

    $consulta = "UPDATE clase SET nombre_clase = '$nombre_clase' WHERE id_clase = '$id_clase';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Clases/Vistas/listar.php");
    exit();
?>