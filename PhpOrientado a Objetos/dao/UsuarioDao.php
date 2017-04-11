<?php

include "conexion/conexionBD.php";

class UsuarioDao {

  public function listaUsuarios(){

    $link = mysqli_connect("localhost", "root", "");
    mysqli_select_db($link, "klance");
    $tildes = $link->query("SET NAMES 'utf8'"); //Para que se muestren las tildes
    $result = mysqli_query($link, "SELECT * FROM usuario");

    $arrayUsuario = null;

    foreach ($result as $valor) {
      echo "Correo: ".$valor['correo']." --- Nombre: ".$valor['nombre']."<br>";
    };

    mysqli_free_result($result);
    mysqli_close($link);

  }
}

 ?>
