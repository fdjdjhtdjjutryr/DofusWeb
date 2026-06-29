<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_oficio = $_GET["id_oficio"];
    $id_personaje = $_GET["id_personaje"];
    

    $consulta = "DELETE FROM oficio_personaje WHERE id_oficio='$id_oficio' AND id_personaje = '$id_personaje'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Oficios_personaje/Vistas/listar.php");
    exit();
?>