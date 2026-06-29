<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_mision = $_GET["id_mision"];
    

    $consulta = "DELETE FROM misiones WHERE id_mision='$id_mision'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Misiones/Vistas/listar.php");
    exit();
?>