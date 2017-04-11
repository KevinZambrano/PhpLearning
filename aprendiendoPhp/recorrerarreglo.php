<?php
//Ejemplo count aprenderaprogramar.com
$estacion[0] = "Primavera";
$estacion[1] = "Verano";
$estacion[2] = "Otoño";
$estacion[3] = "Invierno";
echo count($estacion);
?>
<br>
<?php
//Ejemplo arrays aprenderaprogramar.com
$array[0] = "Uno";
$array[1] = "Dos";
$array[2] = "Tres";
$array[3] = "Cuatro";
$array[4] = "Cinco";
$array[5] = "Seis";
$array[6] = "Siete";
$array[7] = "Ocho";
for ($i = 0; $i < count($array); $i++) {
    echo $array[$i] . '<br />';
}
?>
<br>

<br>
<?php
//Ejemplo arrays aprenderaprogramar.com
$miEspArray[6] = 99;
$miEspArray[22] = 87;
echo 'Numero de elementos de miEspArray es ' . count($miEspArray) . '<br/>';
echo "--------------------";
$array2[0][0][0] = "Prueba1";
$array2[0][0][1] = "Prueba2";
$array2[0][0][2] = "Prueba3";
$array2[0][1][0] = "Prueba4";
$array2[0][1][1] = "Prueba5";
$array2[1][0][1] = "Prueba6";
$array2[1][1][2] = "Prueba7";
$array2[1][2][1] = "Prueba8";
$array2[2][0][0] = "Prueba9";
$array2[2][0][1] = "Prueba10";
$array2[5][0][1] = "Prueba11";
echo '<br/>Numero de indices en el primer nivel: ' . count($array2);
echo '<br/>Numero de indices en el segundo nivel de array[0]: ' . count($array2[0]);
echo '<br/>Numero de indices en el segundo nivel de array[1]: ' . count($array2[1]);
echo '<br/>Numero de indices en el segundo nivel de array[2]: ' . count($array2[2]);
echo '<br/>Numero de indices en el segundo nivel de array[3]: ' . count($array2[3]);
echo '<br/>Numero de indices en el segundo nivel de array[5]: ' . count($array2[5]);
echo '<br/>Numero de indices en el tercer nivel de array[0][0]: ' . count($array2[0][0]);
echo '<br/>Numero de indices en el tercer nivel de array[0][1]: ' . count($array2[0][1]);
echo '<br/>Numero de indices en el tercer nivel de array[1][0]: ' . count($array2[1][0]);
echo '<br/>Numero de indices en el tercer nivel de array[1][1]: ' . count($array2[1][1]);
echo '<br/>Numero de indices en el tercer nivel de array[1][2]: ' . count($array2[1][2]);
echo '<br/>Numero de indices en el tercer nivel de array[2][0]: ' . count($array2[2][0]);
echo '<br/>Numero de indices en el tercer nivel de array[5][0]: ' . count($array2[5][0]);
?>
<br>
<h4>Recorrido array multidimensional</h4>
<?php
//Ejemplo arrays aprenderaprogramar.com
$array[0][0] = "Uno";
$array[0][1] = "Dos";
$array[1][0] = "Tres";
$array[1][1] = "Cuatro";
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo $array[$i][$j] . '<br />';
    }
}
echo "--------------------";
$array2[0][0][0] = "Cinco";
$array2[0][0][1] = "Seis";
$array2[0][0][2] = "Siete";
$array2[0][1][0] = "Ocho";
$array2[0][1][1] = "Nueve";
for ($i = 0; $i < count($array2); $i++) {
    for ($j = 0; $j < count($array2[$i]); $j++) {
        for ($k = 0; $k < count($array2[$i][$j]); $k++) {
            echo $array2[$i][$j][$k] . '<br />';
        }
    }
}
?>
<br>
<?php
//Ejemplo foreach aprenderaprogramar.com
$rows = array(
    array(
        'nombre' => 'Antonio', 'apellidos' => 'Gómez Gómez', 'telefono' => '675832145'),
    array(
        'nombre' => 'Pedro', 'apellidos' => 'Guillén Gastón', 'telefono' => '674562178'),
    array(
        'nombre' => 'Dolores', 'apellidos' => 'Candela Quema', 'telefono' => '689765432'),
    array(
        'nombre' => 'Rubén', 'apellidos' => 'Guardia Jurado', 'telefono' => '654213896')
);
foreach ($rows as $valor) {
    echo 'Nombre: ' . $valor['nombre'] . ' '. $valor['apellidos'] . '<br />';
}
?>