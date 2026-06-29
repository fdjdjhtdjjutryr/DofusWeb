<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_personaje = $_POST["id_personaje"];
    $id_cuenta=$_POST["id_cuenta"];
    $nombre_personaje=$_POST["nombre_personaje"];
    $nivel_personaje=$_POST["nivel_personaje"];
    $id_clase=$_POST["id_clase"];

    $consulta = "UPDATE personaje SET id_cuenta = '$id_cuenta', nombre_personaje = '$nombre_personaje',nivel_personaje = '$nivel_personaje' ,id_clase = '$id_clase'  
    WHERE id_personaje = '$id_personaje';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Personajes/Vistas/listar.php");
    exit();
?>