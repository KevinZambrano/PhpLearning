
<?php
$cad = "cadena";
$sub1 = substr($cad, 2);
$sub2 = substr($cad, 2, 2);
echo "La subcadena número uno es la siguiente: $sub1 <br />";
echo "La subcadena número dos es la siguiente: $sub2";
?>
<br>
<?php
$cad = "cadena"; //Prueba a cambiar el texto cadena por otro
$n = strlen($cad);
echo "La longitud de la cadena es: $n";
?>
<br>

<?php
$cad = "aprenderaprogramar.com";
$sub1 = substr($cad, 0); //La cadena completa
$sub2 = substr($cad, 0, 8); //La subcadena aprender
$sub3 = substr($cad, 8, 1); //La subcadena a
$sub4 = substr($cad, 9); //La subcadena programar
echo "La subcadena número uno es la siguiente: $sub1 <br />";
echo "La subcadena número dos es la siguiente: $sub2 <br />";
echo "La subcadena número tres es la siguiente: $sub3 <br />";
echo "La subcadena número cuatro es la siguiente: $sub4";
?>
<h4>Concatenacion</h4>
<?php
$cad1 = "aprendera";
$cad2 = "programar";
$cadt = $cad1 . $cad2;
echo "La cadena número uno concatenada con la cadena número 2 es: $cadt <br />";
// Ahora concatenaremos la cadena ejemplo con la concatenación de $cad2 y $cad1
echo "Ejemplo: " . ($cad2 . $cad1);
?>