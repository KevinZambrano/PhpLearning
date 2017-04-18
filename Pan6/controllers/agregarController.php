<?php
 require_once '../core/Usuario.php';

 $fecha_hoy = date("Y-m-d");
 $usuario = new Usuario($_REQUEST["correo"],$_REQUEST["nombre"],$_REQUEST["apellidos"], $_REQUEST["genero"],$_REQUEST["password"], $fecha_hoy);
 $usuario->guardar();
 echo $usuario->getNombre() . ' se ha guardado correctamente con el correo: ' . $usuario->getCorreo();

?>
