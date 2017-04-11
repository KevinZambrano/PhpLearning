<?php
class person {
// explícitamente agregando propiedades de la clase
// son opcionales pero una Buena practica
  var $name;
  function __construct($persons_name) {
    $this->name = $persons_name;
  }
  public function get_name() {
    return $this->name;
  }
  // métodos protegidos y propiedades restringen el acceso a aquellos
  // elementos
  protected function set_name($new_name) {
    if (name != "Jimmy Two Guns") {
      $this->name = strtoupper($new_name);
    }
  }
}

?>
