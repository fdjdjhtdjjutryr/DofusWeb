<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_mounstruo = $_POST["id_mounstruo"];
    $nombre_mapa=$_POST["nombre_mapa"];
    $numero_de_piezas = $_POST["numero_de_piezas"];

    $consulta = "INSERT INTO mapa_byc(id_mounstruo,nombre_mapa,numero_de_piezas) VALUES ('$id_mounstruo','$nombre_mapa','$numero_de_piezas')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Mapas/Vistas/listar.php");
    exit();
?>