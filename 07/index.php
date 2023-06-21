<?php
class Fruit {
    public $name;
    public $color;
  
    function __construct($name, $color) {
      $this->name = $name;
      $this->color = $color;
    }
    function get_name() {
      return $this->name;
    }
    function get_color() {
      return $this->color;
    }
  }
  
class watermelon extends Fruit {
    public $weight;
    function __construct($name, $color, $weight) {
      $this->name = $name;
      $this->color = $color;
      $this->weight = $weight;
    }
    function get_weight() {
      return $this->weight;
    }
  }




  $apple = new Fruit("Apple", "red");
  echo $apple->get_name();
  echo "<br>";
  echo $apple->get_color();
  echo "<br>";

    $watermelon = new watermelon("watermelon", "green", "10kg");
    foreach($watermelon as $value ) {
        echo $value . " ";
      }
?>