<?php
class Fruit {
  protected $name;

  public function set_name($name) {
    $this->name = $name;
  }

  public function get_details() {
    echo "Name: " . $this->name;
  }
}

$apple = new Fruit();
$apple->set_name("Apple");
$apple->get_details();
?>