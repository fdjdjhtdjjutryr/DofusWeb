<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_oficio = $_GET["id_oficio"];
    

    $consulta = "DELETE FROM oficios WHERE id_oficio='$id_oficio'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Oficios/Vistas/listar.php");
    exit();
?>