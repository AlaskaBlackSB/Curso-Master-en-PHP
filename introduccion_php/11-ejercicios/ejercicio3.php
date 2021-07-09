<?php

/* 
    Ejercicio 3:
    Recoger dos numeros por url(GET) y hacer todas operaciones básicas
    de una calculadora (suma, resta, multiplicacion y division).
*/

if ( !isset($_GET['num1']) || !isset($_GET['num2']) ) {
    echo "Los parametros son incorrectos.";
}else{
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    echo "Numeros recibidos: " . $num1 . " y " . $num2 . "<br>";
    echo "Suma: " . $num1 + $num2 . "<br>";
    echo "Resta: " . $num1 - $num2 . "<br>";
    echo "Multiplicación: " . $num1 * $num2 . "<br>";
    echo "División: " . $num1 / $num2 . "<br>";
}


