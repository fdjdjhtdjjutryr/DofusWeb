<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_recurso = $_GET["id_recurso"];
    

    $consulta = "DELETE FROM recursos WHERE id_recurso='$id_recurso'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Recursos/Vistas/listar.php");
    exit();
?>