
<html><head><meta charset="utf-8"></head>
<body>
<?php
$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cine");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
$result = mysqli_query($link, "SELECT * FROM ciudad");

foreach ($result as $valor) {
  echo "País: ".$valor['pais']." --- Ciudad: ".$valor['nombre']."<br>";
};
mysqli_free_result($result);
mysqli_close($link);
?>
</body>
</html>
