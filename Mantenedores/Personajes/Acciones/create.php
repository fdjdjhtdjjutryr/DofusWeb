<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_cuenta=$_POST["id_cuenta"];
    $nombre_personaje=$_POST["nombre_personaje"];
    $nivel_personaje=$_POST["nivel_personaje"];
    $id_clase=$_POST["id_clase"];

    $consulta = "INSERT INTO personaje(id_cuenta,nombre_personaje,nivel_personaje,id_clase) VALUES ('$id_cuenta','$nombre_personaje','$nivel_personaje','$id_clase')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Personajes/Vistas/listar.php");
    exit();
?>