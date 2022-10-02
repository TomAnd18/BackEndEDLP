<hr>
<?php
    print "<h3>Punto 1</h3>";

    $numPares = [2, 4, 6, 8, 10, 12, 14, 16, 18, 20];
    
    foreach($numPares as $e) {
        print "$e<br>";
    }
?>

<br><hr>

<?php
    print "<h3>Punto 2</h3>";

    $array = ["Pedro", "Ana", 34, 1];

    print_r($array);
?>

<br><br><hr>

<?php
    print "<h3>Punto 3</h3>";

    $data = [
        'nombre' => "Pedro",
        'apellido' => "Torres",
        'direccion' => "Av. Mayor 3703",
        'telefono' => 1122334455
    ];

    print_r($data);
?>

<br><br><hr>

<?php
    print "<h3>Punto 4</h3>";

    $ciudades = ["Madrid", "Barcelona", "Londres", "New York", "Los Angeles", "Chicago"];
    
    print_r($ciudades);
?>

<br><br><hr>

<?php
    print "<h3>Punto 5</h3>";

    $ciudad = [
        'MD' => "Madrid",
        'BCL' => "Barcelona",
        'LD' => "Londres",
        'NY' => "New York",
        'LA' => "Los Angeles",
        'CCG' => "Chicago"
    ];

    print_r($ciudad);
?>