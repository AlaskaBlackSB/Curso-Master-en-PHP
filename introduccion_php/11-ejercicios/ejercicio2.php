
<?php

/* Ejercicio 2:
   Escribir un programa que imprima por pantalla los cuadrados de los primeros
   40 números naturales.
*/

$numero = 1;
while ($numero <= 40){
    echo "El cuadrado de " . $numero . " es " . $numero * $numero . "<br>";
    $numero++;
}