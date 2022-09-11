<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>backend tp2</title>
</head>
<body>
    <h1>TP2</h1>
    <hr>
    <br>
    <?php
        $n = -10;

        if($n > 0) {
            echo "$n => es un numero positivo";
        } else {
            echo "$n => NO es un numero positivo";
        }
    ?>
    <br>
    <br>
    <hr>
    <br>
    <?php
        $n = 5;

        if(($n > 1) & ($n < 10)) {
            echo "$n => es un numero mayor a 1 y menor a 10";
        } else {
            echo "$n => NO es un numero mayor a 1 y menor a 10";
        }
    ?>
    <br>
    <br>
    <hr>
    <br>
    <?php
        $n = -6;

        if(($n > 10) || ($n < 2)) {
            echo "$n => es un numero mayor a 10 o menor a 2";
        } else {
            echo "$n => NO es un numero mayor a 10 o menor a 2";
        }
    ?>
    <br>
    <br>
    <hr>
    <br>
    <?php
        $numero1 = 22;
        $numero2 = 22;
        
        if($numero1 > $numero2) {
            echo "Suma: ", $numero1 + $numero2;
            echo " - Resta: ", $numero1 - $numero2;
        } elseif($numero2 > $numero1) {
            echo "Multiplicacion: ", $numero2*$numero1;
            echo " - Division: ", $numero2/$numero1;
            echo " - Resto de division: ", $numero2%$numero1;
        } else {
            echo "Los números ingresados son iguales";
        }
    ?>
    <br>
    <br>
    <hr>
</body>
</html>