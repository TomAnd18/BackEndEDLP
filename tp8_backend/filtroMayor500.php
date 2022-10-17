<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    
    <title>toda la ropa</title>
</head>
<body>
    <head>
        <h1>Tienda de ropa</h1>
        <button type="submit"><a href="./listarRopa.php" style="text-decoration: none;">Toda la ropa</a></button>
        <button type="submit"><a href="./filtroBuzos.php" style="text-decoration: none;">Buzos</a></button>
        <button type="submit"><a href="./filtroNike.php" style="text-decoration: none;">Nike</a></button>
        <button type="submit"><a href="./filtroMayor500.php" style="text-decoration: none;">Mayor a 500</a></button>
    </head>

    <?php
        $conexion = mysqli_connect("127.0.0.1", "root", "");
        mysqli_select_db($conexion, "stock_tienda");

        $consulta = 'SELECT * FROM ropa WHERE precio > 500 ';
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
        </div>          
    <?php } ?>
    </div>

</body>
</html>