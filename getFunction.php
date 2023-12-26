<?php

// Utilisation de `__get()`

class MyClass {
  private $myProperty = 'value';

  public function __get($property) {
    if (property_exists($this, $property)) {
      return $this->$property;
    }
  }
}

$obj = new MyClass();
echo $obj->myProperty; // Affiche 'value'