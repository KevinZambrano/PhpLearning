<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo del uso de formularios - aprenderaprogramar.com</title>
    </head>
    <body>
        <form method="get" action="action.php">
            Selecciona tus intereses:
            <br />
            <input name="cbipeliculas" type="checkbox" />Películas
            <br />
            <input name="cbilibros" type="checkbox" checked="checked" />Libros
            <br />
            <input name="cbiinternet" type="checkbox" />Internet
        </form>

        <form name="formulario"method="get"action="ejemploGet.php">
            Nombre: <input type="text"name="nombre"value="">
            <input type="submit"/>
        </form>
        <br>
        <form name="formularioDatos"method="get"action="ejemploGet1.php">
            <p>CÁLCULO DEL VOLUMEN DE UN CILINDRO </p>
            <br/>
            Introduzca el diámetro en metros: <input type="text"name="diam"value="">
            <br/> <br/>
            Introduzca la altura en metros: <input type="text"name="altu"value="">
            <br/> <br/>
            <input value="Calcular" type="submit" />
        </form>
    </body>
</html>
