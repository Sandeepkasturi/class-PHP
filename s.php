<?php
class A {
  // Properties
  
public $name;
public $id;

  // Methods
  function set_name($name) {
  $this->name = $name;
  }
  function get_name() {
  return $this->name;
  }
}$obj = new A();
$obj->set_name("Sandeep");
echo $obj->get_name(); // This will output "John"

?>
