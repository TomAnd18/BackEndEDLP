<?php
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "stock_tienda");

    $id = $_GET['id'];

    $consulta = "DELETE FROM `ropa` WHERE `id`=$id";

    mysqli_query($conexion, $consulta);

    //rederigir a index
    header('location: listarRopa.php');
?>