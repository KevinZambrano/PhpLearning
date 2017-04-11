<?php

class Usuario {

  private $correo;
  private $nombre;
  private $apellidos;
  private $password;
  private $fecha_registro;
  private $estado;

  public function get_correo() {
    return $this->correo;
  }

  public function set_correo($new_correo) {
    $this->correo = $new_correo;
  }

  public function get_nombre() {
    return $this->nombre;
  }

  public function set_nombre($new_nombre) {
    $this->nombre = $new_nombre;
  }

  public function get_apellidos() {
    return $this->apellidos;
  }

  public function set_apellidos($new_apellidos) {
    $this->apellidos = $new_apellidos;
  }

  public function get_password() {
    return $this->password;
  }

  public function set_password($new_password) {
    $this->password = $new_password;
  }

  public function get_fecha_registro() {
    return $this->fecha_registro;
  }

  public function set_fecha_registro($new_fecha_registro) {
    $this->fecha_registro = $new_fecha_registro;
  }

  public function get_estado() {
    return $this->estado;
  }

  public function set_estado($new_estado) {
    $this->estado = $new_estado;
  }

  function __construct($usuario_correo, $usuario_nombre, $usuario_apellidos, $usuario_password,
                       $usuario_fecha_registro, $usuario_estado) {
    $this->correo = $usuario_correo;
    $this->nombre = $usuario_nombre;
    $this->apellidos = $usuario_apellidos;
    $this->password = $usuario_password;
    $this->fecha_registro = $usuario_fecha_registro;
    $this->estado = $usuario_estado;
  }
 ?>
