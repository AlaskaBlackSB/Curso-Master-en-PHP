<?php

/* Ejercicio 4:
   Hacer un programa que muestre todos los números entre dos números
   que lleguen por la url por GET.
*/

if ( !isset($_GET['num1'])  || !isset($_GET['num2']) ){
    echo "Error en los parametros";
}else{
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    
    for ($i=$num1; $i <= $num2; $i++) { 
        echo $i . "<br>";
    }
}
