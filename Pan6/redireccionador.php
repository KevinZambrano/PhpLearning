<?php

   $op=$_REQUEST["op"]; //declaramos la variable $op que va a contener el valor de la opcion clickeada

   switch($op){ //con el switch indicamos que valores va a tener dicha variable segun cada opcion

       //en caso de que "?op" sea igual a "inicio" las variables $contenido y $titulo van a tener estos valores..
       case "inicio":
           $contenido="menu.php";
           $titulo="Home | Pan 6";
           break;

       //esto es igual para las siguientes opciones, excepto "default" que es el valor por defecto que se va a cargar sin clickear ninguna opcion.

       case "agregarUsuario":
           $contenido="agregarUsuario.php";
           $titulo="Usuarios | Nuevos";
           break;

       case "contacto":
           $contenido="php/contacto.php";
           $titulo="Contacto | Mi página";
           break;

       default:
           $contenido="menu.php";
           $titulo="Home | Pan 6";
           break;
   }
?>
