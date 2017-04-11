<?php
class employee extends person {
  protected function set_name($new_name) {
    if ($new_name == "Stefan Sucks") {
      $this->name = $new_name;
    }
    else if($new_name == "Johnny Fingers") {
      person::set_name($new_name);
    }
  }
  function __construct($employee_name) {
    $this->set_name($employee_name);
  }
}


 ?>
