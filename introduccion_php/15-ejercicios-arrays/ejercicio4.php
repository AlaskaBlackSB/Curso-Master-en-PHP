<?php

/* 
    Ejercicio 4:
    Crear un script que tenga 4 variables, un array, otra string, 
    int y bool y que imprima segun el tipo de variable que sea.
*/


$arreglo = ['hola', 12];
$texto = "Esto es un titulo";
$numero = 12;
$bool = true;

if ( is_array($arreglo) ) {
    echo 'La variable $arreglo es un array.<br>';
}

if ( is_string($texto) ) {
    echo 'La variable $texto es un String.<br>';
}

if ( is_numeric($numero) ) {
    echo 'La variable $numero es un numero.<br>';
}

if ( is_bool($bool) ) {
    echo 'La variable $bool es un booleano.<br>';
}