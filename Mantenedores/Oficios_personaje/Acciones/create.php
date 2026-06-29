<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $nivel_oficio=$_POST["nivel_oficio"];

    $consulta = "INSERT INTO oficios(nivel_oficio) VALUES ('$nivel_oficio')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Oficios_personaje/Vistas/listar.php");
    exit();
?>