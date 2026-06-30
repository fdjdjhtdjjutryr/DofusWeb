<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_recurso=$_POST["id_recurso"];
    $id_mounstruo = $_POST["id_mounstruo"];
    $cantidad_recurso = $_POST["cantidad_recurso"];

    $consulta = "INSERT INTO recurso_byc(id_recurso,id_mounstruo,cantidad_recurso) VALUES ('$id_recurso','$id_mounstruo','$cantidad_recurso')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Recurso_byc/Vistas/listar.php");
    exit();
?>