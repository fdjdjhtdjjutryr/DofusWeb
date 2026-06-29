<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $nombre_recurso=$_POST["nombre_recurso"];
    $xp_recurso=$_POST["xp_recurso"];
    $tasa_conversion=$_POST["tasa_conversion"];
    $nivel_recurso=$_POST["nivel_recurso"];

    $consulta = "INSERT INTO recursos(nombre_recurso,xp_recurso,tasa_conversion,nivel_recurso) VALUES ('$nombre_recurso','$xp_recurso','$tasa_conversion','$nivel_recurso')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Clases/Vistas/listar.php");
    exit();
?>