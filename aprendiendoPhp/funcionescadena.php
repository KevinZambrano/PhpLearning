<?php

//Ejemplo funciones básicas aprenderaprogramar.com
$texto = "Donde dije digo digo Diego.";
echo str_replace("Diego", "recortes", $texto);
echo "<br />";
echo $texto;
?>
<br>
<?php
//Ejemplo funciones básicas aprenderaprogramar.com
$texto = "El dijo: es tarde ahora, pero es mejor si hay tres";
echo str_replace("es", "**", $texto, $reemplazos );
echo '<br/>Se han realizado: '.$reemplazos. ' reemplazos<br/>';
echo $texto;
?>
<br>
<h4>strlower y stroupper</h4>


<?php //Ejemplo funciones básicas aprenderaprogramar.com
$cadena = "EstO eS UnA cadeNA de CARActeres";
echo strtolower($cadena);
echo "<br />";
echo strtoupper($cadena);
?>
<br>
<h4>COUNT_CHARS Y SUBSTR_COUNT</h4>
count_chars ( $cadena, $opcModo)


<?php //Ejemplo count_chars aprenderaprogramar.com
$cadena = 'es jueves';
$miArray = count_chars ( $cadena, 1);
foreach ($miArray as $indiceNum => $veces) {
   echo 'Letra: '.chr($indiceNum).' , encontrada '.  $veces.' veces<br/>';
}
?>
<br>
<meta charset="utf-8">
<?php //Ejemplo curso PHP aprenderaprogramar.com
$cadena1 = 'Pedro Juan Luis Marco Luis Pedro Juan Luis Pedro';
$cadena2 = 'Luis';
echo 'Luis aparece '.substr_count($cadena1, $cadena2). ' veces';
?>