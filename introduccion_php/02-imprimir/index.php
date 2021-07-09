<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir por pantalla</title>
</head>
<body>
    <h1>Imprimiendo en php</h1>    

    <!-- Forma rápida de imprimir en php -->
    <?="ola k ase"?>

    <?php
        //Lista de videojuegos
        echo "<h3>Listado de videojuegos:</h3>";
        echo "<ul>";
        echo "<li>GTA V</li>";
        echo "<li>Fifa</li>";
        echo "<li>Mario Bros</li>";
        echo "</ul>";

        echo '<p>Esta es toda' . ' la pagina web.</p>';

        //Imprime el sistema operativo el cual esta usando el cliente
        echo PHP_OS;
    ?>
</body>
</html>



