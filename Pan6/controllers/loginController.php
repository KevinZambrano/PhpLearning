<?php
session_start();
?>

<?php require_once("../conexion/Conexion.php"); ?>

<?php if(isset($_SESSION["session_username"])){
// echo "Session is set"; // for testing purposes
header("Location: index.php");
}

if(isset($_POST["login"])){


  if(!empty($_POST['username']) && !empty($_POST['password'])) {
      $correo=$_POST['correo'];
      $password=$_POST['password'];

      $conexion = new Conexion();
      $query = $conexion->prepare('select * from usuario WHERE correo='".$correo."' AND password='".$password."'');
      $query->execute();
      $registro = $query->fetch();
      if($registro){
        $dbcorreo=$registro['correo'];
        $dbpassword=$registro['password'];
        if($correo == $dbcorreo && $password == $dbpassword){

          $_SESSION['session_username']=$correo;

          /* Redirect browser */
          header("Location: index.php");

          } else {

       $message =  "Nombre de usuario ó contraseña invalida!";
          }

      } else {
          $message = "Todos los campos son requeridos!";
      }
    }
  }
?>
