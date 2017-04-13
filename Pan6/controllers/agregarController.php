<?php
 require_once '../core/Usuario.php';
 $usuario = new Usuario($_REQUEST["correo"],$_REQUEST["nombre"],$_REQUEST["apellidos"], $_REQUEST["genero"],$_REQUEST["password"]);
 $usuario->guardar();
 echo $usuario->getNombre() . ' se ha guardado correctamente con el correo: ' . $usuario->getCorreo();

?>
