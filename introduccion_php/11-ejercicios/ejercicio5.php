<?php

/* Ejercicio 5:
   Imprimir por pantalla todas las tablas de multiplicar con tablas en html
*/


echo "<table border='1'>";  //Inicio de la tabla

echo "<tr>";
for ($i=1; $i <= 10; $i++) { 
    echo "<td>Tabla del $i</td>";
}
echo "</tr>";   

echo "<tr>";
for ($i=1; $i <= 10; $i++) {

    echo "<td>";
    for ($j=0; $j <= 10; $j++) { 
        echo $i . " x " . $j . " = " . ($i * $j) . "<br>";
    }
    echo "</td>";
}
echo "</tr>";

echo "</table>";            //Fin de la tabla