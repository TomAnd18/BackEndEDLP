<br>
<br>
<hr>
<br>

<?php
    print "Numeros del 1 - 100: <br>";
    for($i=1; $i<=100; $i++) {
        print "$i\n";
    }
?>

<br>
<br>
<hr>
<br>

<?php
    print "Numeros del 100 - 1: <br>";
    for($i=100; $i>=1; $i--) {
        print "$i\n";
    }
?>

<br>
<br>
<hr>
<br>

<?php
    print "Numeros pares del 1 - 100: <br>";
    for($i=1; $i<=100; $i++) {
        if(($i%2) == 0) {
            print "$i\n";
        }
    }
?>

<br>
<br>
<hr>
<br>

<?php
    print "Numeros impares del 1 - 100: <br>";
    for($i=1; $i<=100; $i++) {
        if(($i%2) != 0) {
            print "$i\n";
        }
    }
?>

<br>
<br>
<hr>
<br>

<?php
    print "Suma de los primeros 20 numeros: ";
    $suma = 0;
    for($i=1; $i<=20; $i++) {
        $suma = $suma + $i;
    }
    print $suma;
?>

<br>
<br>
<hr>
<br>

<?php
    print "Suma de numeros pares del 1 -20 : ";
    $suma = 0;
    for($i=1; $i<=20; $i++) {
        if(($i%2) == 0) {
            $suma = $suma + $i;
        }
    }
    print $suma;
?>

<br>
<br>
<hr>
<br>