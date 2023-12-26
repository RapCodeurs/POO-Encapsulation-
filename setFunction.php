<?php

// Utilisation de `__set()`

class MyClass {
    private $myProperty = 'value';
  
    public function __set($property, $value) {
      if (property_exists($this, $property)) {
        $this->$property = $value;
      }
    }
}
  
$obj = new MyClass();
$obj->myProperty = 'new value';
echo $obj->myProperty; // Affiche 'new value'


