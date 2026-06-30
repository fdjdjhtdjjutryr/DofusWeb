<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $nombre_byc=$_POST["nombre_byc"];
    $nivel_byc=$_POST["nivel_byc"];

    $consulta = "INSERT INTO clase(nombre_byc,nivel_byc) VALUES ('$nombre_byc','$nivel_byc')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Monstruos/Vistas/listar.php");
    exit();
?>