<?php
require_once ($_SERVER['DOCUMENT_ROOT']."/DAOphp/interfaces/IUsuario.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/DAOphp/conexion/DataSource.php");
require_once ($_SERVER['DOCUMENT_ROOT']."/DAOphp/core/Usuario.php");
class Usuario implements IUsuario{

    public function selectUsuario(){

        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario");
        $usuario = null;
        $usuarios = array();

        foreach ($data_table as $clave => $valor) {
            $usuario = new Usuario();
            $usuario->setIdusuario( $data_table[$clave]["idusuario"] );
            $usuario->setNombre( $data_table[$clave]["nombre"] );
            $usuario->setApellidoPaterno( $data_table[$clave]["apellidoPaterno"] );
            $usuario->setApellidoMaterno( $data_table[$clave]["apellidoMaterno"] );
            $usuario->setNacionalidad( $data_table[$clave]["nacionalidad"] );
            $usuario->setSexo( $data_table[$clave]["sexo"] );
            $usuario->setCorreo( $data_table[$clave]["correo"] );
            $usuario->setClave( $data_table[$clave]["clave"] );
            array_push($usuarios, $usuario);
        }
        return $usuarios;
    }

    public function selectUsuarioById($id){
        $data_source = new DataSource();
        $data_table = $data_source->ejecutarConsulta("SELECT * FROM usuario WHERE idusuario = :idusuario",array(':idusuario'=>$id));
        $usuario = null;

        if(count($data_table) == 1){

          foreach ($data_table as $clave => $valor) {
              $usuario = new Usuario();
              $usuario->setIdusuario( $data_table[$clave]["idusuario"] );
              $usuario->setNombre( $data_table[$clave]["nombre"] );
              $usuario->setApellidoPaterno( $data_table[$clave]["apellidoPaterno"] );
              $usuario->setApellidoMaterno( $data_table[$clave]["apellidoMaterno"] );
              $usuario->setNacionalidad( $data_table[$clave]["nacionalidad"] );
              $usuario->setSexo( $data_table[$clave]["sexo"] );
              $usuario->setCorreo( $data_table[$clave]["correo"] );
              $usuario->setClave( $data_table[$clave]["clave"] );
          }
          return $usuario;
        }else{
          return null;
        }
    }
}
 ?>
