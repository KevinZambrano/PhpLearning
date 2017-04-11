<?php

//Ejemplo funciones aprenderaprogramar.com
//Declaración de funciones

function mostrarTexto($texto) {
    echo "<strong>El texto a mostrar es el siguiente: </strong>";
    echo $texto;
}

//Fin de declaración de funciones
mostrarTexto("Me gusta mucho la web de aprenderaprogramar.com");
?>
<br>
<?php
// Ejemplo funciones aprenderaprogramar.com

function operaciones($n1, $n2, $operacion) {
    $resultado = 0;
    if ($operacion == "Sumar") {
        $resultado = $n1 + $n2;
    } else if ($operacion == "Restar") {
        $resultado = $n1 - $n2;
    } else if ($operacion == "Multiplicar") {
        $resultado = $n1 * $n2;
    }
    return $resultado; // Devolver el resultado
}

// Llamar a la función operaciones
$r = operaciones(5, 7, "Sumar");
echo $r . "<br>";
// O podemos imprimir directamente
echo operaciones(15, 8, "Restar");
?>