<?php

/* 
    Ejercicio 2:
    Escribir un programa que añada valores a un array mientras que la longitud
    sea menor a 120 y luego mostrarlo por pantalla.
*/

$numeros = [];

$i = 0;
while (count($numeros) <= 120) {
    
    array_push($numeros, $i);

    $i++;
}

foreach($numeros as $numero){
    echo "$numero<br>";
}