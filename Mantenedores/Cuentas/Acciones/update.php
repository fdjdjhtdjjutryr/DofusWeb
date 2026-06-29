<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_cuenta = $_POST["id_cuenta"];
    $nombre_cuenta=$_POST["nombre_cuenta"];
    $apodo_cuenta=$_POST["apodo_cuenta"];
    $correo_cuenta=$_POST["correo_cuenta"];

    $consulta = "UPDATE cuenta SET nombre_cuenta = '$nombre_cuenta' ,apodo_cuenta = '$apodo_cuenta' ,correo_cuenta = '$correo_cuenta'  WHERE id_clase = '$id_clase';";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Cuentas/Vistas/listar.php");
    exit();
?>