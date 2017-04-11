
<html><head><meta charset="utf-8"> </head>
<body>
<?php
//Ejemplo aprenderaprogramar.com

$link = mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "cine");
$tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes correctamente
$result = mysqli_query($link, "SELECT * FROM datos");

?>
<table border="6">
  <thead>
    <th>Nombre</th>
    <th>Apellidos</th>
    <th>Direccion</th>
    <th>Telefono</th>
    <th>Edad</th>
  </thead>
  <tbody>
    <?php
    while ($fila = mysqli_fetch_array($result)){
      echo '<tr>';
      echo '<td>'.$fila['nombre'].'</td>';
      echo '<td>'.$fila['apellidos'].'</td>';
      echo '<td>'.$fila['direccion'].'</td>';
      echo '<td>'.$fila['telefono'].'</td>';
      echo '<td>'.$fila['edad'].'</td>';
      echo '</tr>';
    }
    mysqli_free_result($result);
    mysqli_close($link);
     ?>

  </tbody>
</table>
</body></html>
