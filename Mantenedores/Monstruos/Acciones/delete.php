<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_mounstruo = $_GET["id_mounstruo"];
    

    $consulta = "DELETE FROM monstruo_byc WHERE id_mounstruo='$id_mounstruo'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Monstruos/Vistas/listar.php");
    exit();
?>