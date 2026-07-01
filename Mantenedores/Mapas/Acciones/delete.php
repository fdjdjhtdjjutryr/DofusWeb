<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_mapa = $_GET["id_mapa"];
    
    

    $consulta = "DELETE FROM mapa_byc WHERE id_mapa='$id_mapa'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Mapas/Vistas/listar.php");
    exit();
?>