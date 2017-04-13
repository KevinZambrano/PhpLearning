<?php
 require_once 'conexion/Conexion.php';
 class Usuario {
   private $correo;
   private $nombre;
   private $apellidos;
   private $genero;
   private $password;
   const TABLA = 'usuario';

   public function getCorreo() {
      return $this->correo;
   }
   public function getNombre() {
      return $this->nombre;
   }
   public function getApellidos() {
      return $this->apellidos;
   }
   public function getGenero(){
      return $this->genero;
   }
   public function getPassword(){
      return $this->password;
   }
   public function setCorreo($correo){
      $this->correo = $genero;
   }
   public function setNombre($nombre){
      $this->nombre = $nombre;
   }
   public function setApellidos($apellidos){
      $this->apellidos = $apellidos;
   }
   public function setGenero($genero) {
      $this->genero = $genero;
   }
   public function setPassword($password) {
      $this->password = $password;
   }
   public function __construct($correo, $nombre, $apellidos,$genero,$password) {
      $this->correo = $correo;
      $this->nombre = $nombre;
      $this->apellidos = $apellidos;
      $this->genero = $genero;
      $this->password = $password;
   }
   public function guardar(){
      $conexion = new Conexion();

         $consulta = $conexion->prepare('INSERT INTO ' . self::TABLA .' (correo, nombre, apellidos, genero, password) VALUES(:correo, :nombre, :apellidos, :genero, :password)');
         $consulta->bindParam(':correo', $this->correo);
         $consulta->bindParam(':nombre', $this->nombre);
         $consulta->bindParam(':apellidos', $this->apellidos);
         $consulta->bindParam(':genero', $this->genero);
         $consulta->bindParam(':password', $this->password);
         $consulta->execute();
         $this->correo = $conexion->lastInsertId();

      $conexion = null;
   }
   public function modificar(){
     if($this->correo) /*Modifica*/ {
        $consulta = $conexion->prepare('UPDATE ' . self::TABLA .' SET correo = :correo, nombre = :nombre, apellidos = :apellidos, genero = :genero, password = :password WHERE correo = :correo');
        $consulta->bindParam(':correo', $this->correo);
        $consulta->bindParam(':nombre', $this->nombre);
        $consulta->bindParam(':apellidos', $this->apellidos);
        $consulta->bindParam(':genero', $this->genero);
        $consulta->bindParam(':password', $this->password);
        $consulta->execute();
    }
   }
   public static function buscarPorCorreo($correo){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT correo, nombre, apellidos, genero, password FROM ' . self::TABLA . ' WHERE correo = :correo');
       $consulta->bindParam(':correo', $correo);
       $consulta->execute();
       $registro = $consulta->fetch();
       if($registro){
          return new self($registro['correo'],$registro['nombre'], $registro['apellidos'], $registro['genero'], $registro['password'], $correo);
       }else{
          return false;
       }
    }

    public static function recuperarTodos(){
       $conexion = new Conexion();
       $consulta = $conexion->prepare('SELECT correo, nombre, apellidos, genero, password FROM ' . self::TABLA . ' ORDER BY nombre');
       $consulta->execute();
       $registros = $consulta->fetchAll();
       return $registros;
    }
 }
?>
