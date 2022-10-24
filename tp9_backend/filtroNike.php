<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/style.css">
    
    <title>toda la ropa</title>
</head>
<body>
    <div class="tittle-select">
        <div class="tittle">
            <h1>Tienda de ropa</h1>
        </div>
        <div class="select">
            <a href="./listarRopa.php" style="text-decoration: none;"> <button type="submit"> Toda la ropa </button> </a>
            <a href="./filtroBuzos.php" style="text-decoration: none;"> <button type="submit"> Buzos </button> </a>
            <a href="./filtroNike.php" style="text-decoration: none;"> <button type="submit"> Nike </button> </a>
            <a href="./filtroMayor500.php" style="text-decoration: none;"><button type="submit"> Mayor a $500 </button></a>
            <a href="./agregar.html" style="text-decoration: none;"><button type="submit"> Agregar </button></a>
        </div>
    </div>

    <?php
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "stock_tienda");

        $consulta = 'SELECT * FROM ropa WHERE marca = "nike" ';
        $datos = mysqli_query($conexion, $consulta);
    ?>

    <div class="cards-container">
    <?php while(  $prenda = mysqli_fetch_array($datos) ) { ?>
        <div class="card">
            <div class="img-card"> <img src=" data:image/png;base64, <?php echo base64_encode($prenda['imagen'])?> " alt="buzo"> </div>
            <div class="talle"> <?php echo $prenda['talle'] ?> </div>
            <div class="tipo-marca">
                <div class="tipo"> <?php echo $prenda['tipo'] ?> </div>
                <div class="marca"> <?php echo $prenda['marca'] ?> </div>
            </div>
            <div class="precio"> <?php echo "$", $prenda['precio'] ?> </div>
            <div class="edit-delete-container">
                <div class="edit-container">
                    <a href="./editar.php?id=<?php echo $prenda['id'];?>"> <button> Editar </button> </a>
                </div>
                <div class="delete-container">
                    <a href="./borrar.php?id=<?php echo $prenda['id'];?>"> <button> Borrar </button> </a>
                </div>
            </div>
        </div>          
    <?php } ?>
    </div>

</body>
</html>