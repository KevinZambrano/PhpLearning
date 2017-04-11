<?php

function escribirTresNumeros($numero1,$numero2,$numero3){

    $fp = fopen("C:/Users/k.zambrano.torres/Desktop/Php/ficheroejerc.txt", "a");
    fwrite($fp, $numero1 . PHP_EOL);
    fwrite($fp, $numero2 . PHP_EOL);
    fwrite($fp, $numero3 . PHP_EOL);

    fclose($fp);
}

escribirTresNumeros($_REQUEST['numero1'],$_REQUEST['numero2'],$_REQUEST['numero3']);

$fp = fopen("C:/Users/k.zambrano.torres/Desktop/Php/ficheroejerc.txt", "r");
while (!feof($fp)) {
    $linea = fgets($fp);
    echo $linea . "<br />";
}
fclose($fp);

?>
