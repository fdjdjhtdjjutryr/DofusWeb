<?php
    require_once dirname(__DIR__,3) . "/bootstrap.php";
    $id_cuenta = $_GET["id_cuenta"];
    

    $consulta = "DELETE FROM cuenta WHERE id_cuenta='$id_cuenta'";
    $resultado = mysqli_query($conexion , $consulta);

    header("Location: " . BASE_URL . "/Mantenedores/Cuentas/Vistas/listar.php");
    exit();
?>