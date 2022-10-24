<?php
    $conexion = mysqli_connect("127.0.0.1", "root", "");
    mysqli_select_db($conexion, "stock_tienda");

    $id = $_GET['id'];

    $consulta = "SELECT * FROM ropa WHERE id = $id";

    $respuesta = mysqli_query($conexion, $consulta);
    $datos = mysqli_fetch_array($respuesta);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/editar.css">
    <title>Editar prenda</title>
</head>
<body>
    <?php
        $tipo = $datos['tipo'];
        $marca = $datos['marca'];
        $talle = $datos['talle'];
        $precio = $datos['precio'];
        $imagen = $datos['imagen'];
    ?>

    

    <div class="container">
        <div class="tittle">
            <h2>Modificar</h2>
            <p>Ingrese los nuevos datos de la prenda</p>
        </div>

        <form method="POST" action="" enctype="multipart/form-data">
          
            <div class="group">      
                <label>Tipo</label>
                <input type="text" name="tipo" placeholder="Ingrese tipo de prenda" value="<?php echo "$tipo"; ?>" required>
            </div>
            
            <div class="group">      
                <label>Marca</label>
                <input type="text" name="marca" placeholder="Ingrese marca" value="<?php echo "$marca"; ?>" required>
            </div>

            <div class="group">      
                <label>Talle</label>
                <input type="text" name="talle" placeholder="Ingrese talle" value="<?php echo "$talle"; ?>" required>
            </div>

            <div class="group">      
                <label>Precio</label>
                <input type="text" name="precio" placeholder="Ingrese precio" value="<?php echo "$precio"; ?>" required>
            </div>
          
            <div class="group">
                <label>Imagen</label> 
                <input type="file" name="imagen" required>
            </div>

            <div class="btn-guardar-cancelar">
                <input type="submit" name="guardar" value="Guardar">
                <button type="submit" name="cancelar" formaction="./listarRopa.php"> Cancelar </button>
            </div>
          
        </form> 
    </div>

    <?php
        if(array_key_exists('guardar',$_POST)) {
            $tipo = $_POST['tipo'];
            $marca = $_POST['marca'];
            $talle = $_POST['talle'];
            $precio = $_POST['precio'];
            $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

            $consulta = "UPDATE ropa SET tipo='$tipo', marca='$marca', talle='$talle', precio='$precio', imagen='$imagen' WHERE id = $id";

            mysqli_query($conexion,$consulta);

            //rederigir a index
            header('location: listarRopa.php');
        }
    ?>
</body>
</html>