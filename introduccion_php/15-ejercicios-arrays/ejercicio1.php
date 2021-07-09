<?php

/* 
    Ejercicio 1:
    Hacer un programa que tenga aun array con 8 números enteros y 
    que realice lo siguiente:
        -Mostrar el arreglo.
        -Ordenar el arreglo y mostrarlo.
        -Mostrar la longitud.
        -Buscar algun elemento del array.
*/

$numeros = [1, 2, 3, 6, 7, 84, 2, 567, 3, 9];

//Mostrar el arreglo

echo "mostrando el arreglo inicial <br>";

mostrarArreglo($numeros);

echo "<hr>";

//Ordena el arreglo y lo muestra

echo "mostrando el arreglo ordenado <br>";

sort($numeros);

mostrarArreglo($numeros);


//Muestra la longitud del arreglo

echo "<br>Número de elementos: " . count($numeros);

//Busca el numero 84 en el arreglo
$busqueda = 84;
echo "<br>Buscar en el array el número " . $busqueda . "<br>";

$indice = array_search( $busqueda, $numeros );

if ( $indice ) {
    echo "El numero 84 existe en el arreglo en el indice $indice<br>";
}else{
    echo "El numero $busqueda NO existe en el arreglo<br>";
}


/* FUNCIONES */

/* Funcion que muestra un arreglo en pantalla */
function mostrarArreglo(Array $array) : void {
    for ($i=0; $i < count($array); $i++) { 
        echo $array[$i] . "<br>";
    }
    
    echo "<br>";
    
    foreach($array as $numero){
        echo $numero . "<br>";
    }
}