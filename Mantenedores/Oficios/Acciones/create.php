<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $nombre_oficio=$_POST["nombre_oficio"];

    $consulta = "INSERT INTO oficios(nombre_oficio) VALUES ('$nombre_oficio')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Oficios/Vistas/listar.php");
    exit();
?>