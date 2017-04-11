<?php
//Ejemplo arrays aprenderaprogramar.com
$colores_vehiculos = array(
    'coche' => 'Rojo',
    'moto' => 'verde',
    'avion' => 'amarillo'
);
echo $colores_vehiculos['moto'];
?>
<br>
<?php
//Ejemplo arrays aprenderaprogramar.com
$indice = 'coche';
$colores_vehiculos = array(
    $indice => 'Rojo',
    'moto' => 'verde',
    'avion' => 'amarillo'
);
echo $colores_vehiculos[$indice];
?>
<br>
<?php //Ejemplo arrays aprenderaprogramar.com
$colores_vehiculos ['coche'] = 'Rojo';
$colores_vehiculos ['moto'] = 'verde';
$colores_vehiculos ['avion'] = 'amarillo';
echo $colores_vehiculos['moto'];
?>