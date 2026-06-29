<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $nombre_cuenta=$_POST["nombre_cuenta"];
    $apodo_cuenta=$_POST["apodo_cuenta"];
    $correo_cuenta=$_POST["correo_cuenta"];

    $consulta = "INSERT INTO cuenta(nombre_cuenta,apodo_cuenta,correo_cuenta) VALUES ('$nombre_cuenta','$apodo_cuenta','$correo_cuenta')";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Cuentas/Vistas/listar.php");
    exit();
?>