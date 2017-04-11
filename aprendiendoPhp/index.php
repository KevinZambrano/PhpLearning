<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo de una web con PHP - aprenderaprogramar.com</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php
        echo "Mi primera página con PHP embebido en HTML - aprenderaprogramar.com";
        ?>
        <br>
        <?php
        echo "salida por pantalla. ";
        echo "<br>";
        $a = 5;

        echo $a;
        echo "<br>";
        echo " El valor de a es $a.";
        echo 'con comillas simples<br/>';
        echo ('con paréntesis y comillas simples<br/>');
        echo ("con paréntesis y comillas dobles<br/>");
        echo '<h1>Salida por pantalla</h1><br/>';
        ?>
    </body>
</html>
