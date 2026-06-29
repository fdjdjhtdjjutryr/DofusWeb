<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_clase = $_GET["id_clase"];
    

    $consulta = "DELETE FROM clase WHERE id_clase='$id_clase'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Clases/Vistas/listar.php");
    exit();
?>