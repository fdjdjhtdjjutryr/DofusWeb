<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_logro = $_GET["id_logro"];
    

    $consulta = "DELETE FROM logros WHERE id_logro='$id_logro'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Logros/Vistas/listar.php");
    exit();
?>