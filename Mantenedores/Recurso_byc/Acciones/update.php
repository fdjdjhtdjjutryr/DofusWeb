<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_recurso=$_POST["id_recurso"];
    $id_mounstruo = $_POST["id_mounstruo"];
    $cantidad_recurso = $_POST["cantidad_recurso"];

    $consulta = "UPDATE recurso_byc SET cantidad_recurso = '$cantidad_recurso' WHERE id_recurso = '$id_recurso' AND id_mounstruo = '$id_mounstruo';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Recurso_byc/Vistas/listar.php");
    exit();
?>