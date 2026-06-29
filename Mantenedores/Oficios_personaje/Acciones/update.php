<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_personaje = $_POST["id_personaje"];
    $id_oficio = $_POST["id_oficio"];
    $nivel_oficio=$_POST["nivel_oficio"];

    $consulta = "UPDATE oficio_personaje SET nivel_oficio = '$nivel_oficio' WHERE id_oficio = '$id_oficio' AND id_personaje = '$id_personaje';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Oficios_personaje/Vistas/listar.php");
    exit();
?>