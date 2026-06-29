<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $nombre_clase=$_POST["nombre_clase"];

    $consulta = "INSERT INTO clase(nombre_clase) VALUES ('$nombre_clase')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Clases/Vistas/listar.php");
    exit();
?>