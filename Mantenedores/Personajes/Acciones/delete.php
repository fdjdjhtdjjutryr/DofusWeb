<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_personaje = $_GET["id_personaje"];
    

    $consulta = "DELETE FROM personaje WHERE id_personaje='$id_personaje'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Personajes/Vistas/listar.php");
    exit();
?>