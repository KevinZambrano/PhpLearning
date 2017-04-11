<?php

$fp = fopen("C:/Users/k.zambrano.torres/Desktop/Php/ficheroprueba.txt", "r");
while (!feof($fp)) {
    $linea = fgets($fp);
    echo $linea . "<br />";
}
fclose($fp);


?>

<?php // Ejemplo aprenderaprogramar.com
// Escribimos una primera línea en fichero.txt
// fichero.txt tienen que estar en la misma carpeta que el fichero php
$fp = fopen("C:/Users/k.zambrano.torres/Desktop/Php/ficheroprueba.txt", "w");
fputs($fp, "Prueba de escritura aprenderaprogramar.com");
fclose($fp);
?>
