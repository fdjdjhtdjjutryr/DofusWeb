<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_recurso = $_GET["id_recurso"];
    $id_mounstruo = $_GET["id_mounstruo"];
    

    $consulta = "DELETE FROM recurso_byc WHERE id_recurso='$id_recurso' AND id_mounstruo = '$id_mounstruo'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Recurso_byc/Vistas/listar.php");
    exit();
?>