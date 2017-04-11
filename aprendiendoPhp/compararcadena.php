<meta charset="utf-8">
<?php
//Ejemplos curso PHP aprenderaprogramar.com
$cadena1 = '1e3';
$cadena2 = '1000';
if ($cadena1 == $cadena2) {
    echo 'Según == las dos cadenas son iguales';
} else {
    echo 'Según == las dos cadenas NO son iguales';
}
echo '<br/>';
if ($cadena1 === $cadena2) {
    echo 'Según === las dos cadenas son iguales';
} else {
    echo 'Según === las dos cadenas NO son iguales';
}
echo '<br/>';
if (strcmp($cadena1, $cadena2) == 0) {
    echo 'Según strcmp las dos cadenas son iguales';
} else {
    echo 'Según strcmp las dos cadenas NO son iguales';
}
?>
<br>

<?php
$cadena = 'aprenderaprogramar.com';
echo '<p>' . str_pad($cadena, 28, '*') . '</p>';
echo '<p>' . str_pad($cadena, 48, 'cool!') . '</p>';
echo '<p>' . str_pad($cadena, 2, 'a') . '</p>';
echo '<p>' . str_pad($cadena, 28, '*', STR_PAD_RIGHT) . '</p>';
echo '<p>' . str_pad($cadena, 29, '@', STR_PAD_BOTH) . '</p>';
?>

