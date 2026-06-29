<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_recurso = $_POST["id_recurso"];
    $nombre_recurso=$_POST["nombre_recurso"];
    $xp_recurso=$_POST["xp_recurso"];
    $tasa_conversion=$_POST["tasa_conversion"];
    $nivel_recurso=$_POST["nivel_recurso"];

    $consulta = "UPDATE recursos SET nombre_recurso = '$nombre_recurso',xp_recurso = '$xp_recurso',tasa_conversion = '$tasa_conversion',
    nivel_recurso = '$nivel_recurso' WHERE id_recurso = '$id_recurso';";

    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Recursos/Vistas/listar.php");
    exit();
?>