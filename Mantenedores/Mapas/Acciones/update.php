<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_mapa = $_POST["id_mapa"];
    $id_mounstruo = $_POST["id_mounstruo"];
    $nombre_mapa=$_POST["nombre_mapa"];
    $numero_de_piezas = $_POST["numero_de_piezas"];

    $consulta = "UPDATE mapa_byc SET id_mounstruo = '$id_mounstruo',nombre_mapa = '$nombre_mapa',numero_de_piezas = '$numero_de_piezas' WHERE id_mapa = '$id_mapa';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Mapas/Vistas/listar.php");
    exit();
?>