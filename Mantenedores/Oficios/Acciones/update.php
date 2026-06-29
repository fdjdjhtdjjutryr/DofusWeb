<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_oficio = $_POST["id_oficio"];
    $nombre_clase=$_POST["nombre_clase"];

    $consulta = "UPDATE oficios SET nombre_oficio = '$nombre_clase' WHERE id_oficio = '$id_oficio';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Oficios/Vistas/listar.php");
    exit();
?>