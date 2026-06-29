<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_logro = $_POST["id_logro"];
    $nombre_logro=$_POST["nombre_logro"];

    $consulta = "UPDATE logros SET nombre_logro = '$nombre_logro' WHERE id_logro = '$id_logro';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Logros/Vistas/listar.php");
    exit();
?>