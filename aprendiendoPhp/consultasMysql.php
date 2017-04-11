<html><head><meta charset="utf-8"> </head>
<body>
<?php
//Ejemplo aprenderaprogramar.com
function mostrarDatos ($resultados) {
if ($resultados !=NULL) {
echo "- Nombre: ".$resultados['nombre']."<br/> ";
echo "- Apellidos: ".$resultados['apellidos']."<br/>";
echo "- Dirección: ".$resultados['direccion']."<br/>";
echo "- Teléfono: ".$resultados['telefono']."<br/>";
echo "- Edad: ".$resultados['edad']."<br/>";}
else {echo "<br/>No hay más datos!!! <br/>";}
}
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cine");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM datos");
mostrarDatos(mysqli_fetch_array($result));
mostrarDatos(mysqli_fetch_array($result));
mostrarDatos(mysqli_fetch_array($result));
mostrarDatos(mysqli_fetch_array($result));
mostrarDatos(mysqli_fetch_array($result));
mostrarDatos(mysqli_fetch_array($result));
mysqli_free_result($result);
mysqli_close($link);
?>
</body></html>
