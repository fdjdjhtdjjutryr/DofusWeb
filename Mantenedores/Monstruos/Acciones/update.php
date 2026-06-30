<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_mounstruo = $_POST["id_mounstruo"];
    $nombre_byc=$_POST["nombre_byc"];
    $nivel_byc=$_POST["nivel_byc"];

    $consulta = "UPDATE clase SET nombre_byc = '$nombre_byc',nivel_byc = '$nivel_byc' WHERE id_mounstruo = '$id_mounstruo';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Monstruos/Vistas/listar.php");
    exit();
?>