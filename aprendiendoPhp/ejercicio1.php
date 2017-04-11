<?php

function escribirTresNumeros($numero1,$numero2,$numero3){

    $fp = fopen("C:/Users/k.zambrano.torres/Desktop/Php/ficheroejerc.txt", "w");
    fputs($fp, $numero1);
    fputs($fp, $numero2);
    fputs($fp, $numero3);

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
