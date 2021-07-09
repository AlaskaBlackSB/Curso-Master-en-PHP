<?php

/* 
    Ejercicio 3:
    Hacer un programa que compruebe si una variable esta vacia y si
    lo esta, rellenarla con texto en minusculas y mostrar en mayusculas
    y en negrito.
*/

$texto = "";

if ( empty($texto) ) {
    $texto = "hola como estas";
}

echo "<strong>" .  strtoupper($texto) . "</strong>";


