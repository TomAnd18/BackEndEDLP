<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tp1 backend</title>
</head>
<body>

    <h1>Aprendiendo PHP</h1>

    <?php
        echo "Hola Mundo";
    ?>

    <br>
    <br>

    <?php
        $mensaje = "Hola Mundo x2";
        echo $mensaje;
    ?>

    <br>
    <br>

    <?php
        $num1 = 10;
        $num2 = 3;
        
        echo "Suma: ", $num1 + $num2;
    ?>

    <br>
    <br>

    <?php
        echo "Resta: ", $num1 - $num2;
    ?>

    <br>
    <br>

    <?php
        echo "Multiplicacion: ", $num1*$num2;
    ?>

    <br>
    <br>

    <?php
        echo "Division: ", $num1 / $num2;
    ?>

    <br>
    <br>

    <?php
        echo "Resto de la division: ", $num1 % $num2;
    ?>

    <br>
    <br>

    <?php
        $grados = 20;
        $fahrenheit = $grados*1.8 + 32;
        echo "Grados Celsius => ", $grados, "°C", " - Grados Fahrenheit => ", $fahrenheit, "°F";
    ?>

    <br>
    <br>

    <h3>Area y Perimetro de un rectangulo de base 18cm y altura 12cm</h3>
    <?php
        $base = 18;
        $altura = 12;
        $areaR = $base*$altura;
        $perimetroR = 2*$base + 2*$altura;
        echo "Area => ", $areaR, "cm", " - Perimetro => ", $perimetroR, "cm";
    ?>

    <br>
    <br>

    <h3>Area y Perimetro de un circulo de radio 30cm</h3>
    <?php
        $pi = 3.14;
        $radio = 30;
        $areaC = $pi*$radio**2;
        $perimetroC = 2*$pi*$radio;
        echo "Area => ", $areaC, "cm", " - Perimetro => ", $perimetroC, "cm";
    ?>

</body>
</html>