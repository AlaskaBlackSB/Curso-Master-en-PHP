<?php

/* 
    Ejercicio 5:
    Crear un array con el contenido de la siguiente tabla:
    
    ACCION AVENTURA DEPORTES
    GTA V  ASSASINS FIFA
    COD    CRASH    PES 
    PUGB   PRINCE   MOTO GP 19

    Cada fila debe ir en un fichero separado
*/

$tabla = [
    'accion' => ["gta v", "cod", "pugb"],
    'aventura' => ["assasins", "crash", "prince"],
    'deportes' => ["fifa", "pes", "moto gp 19"],
];

$categorias = array_keys($tabla);
?>

<table border="1">
    <tr>
        <?php foreach ($categorias as $categoria):?>
            <th><?php echo $categoria; ?></th>
        <?php endforeach; ?>
    </tr>
    <tr>
        <td><?php echo $tabla['accion'][0]; ?></td>
        <td><?php echo $tabla['aventura'][0]; ?></td>
        <td><?php echo $tabla['deportes'][0]; ?></td>
    </tr>
    <tr>
        <td><?php echo $tabla['accion'][1]; ?></td>
        <td><?php echo $tabla['aventura'][1]; ?></td>
        <td><?php echo $tabla['deportes'][1]; ?></td>
    </tr>
    <tr>
        <td><?php echo $tabla['accion'][2]; ?></td>
        <td><?php echo $tabla['aventura'][2]; ?></td>
        <td><?php echo $tabla['deportes'][2]; ?></td>
    </tr>
</table>