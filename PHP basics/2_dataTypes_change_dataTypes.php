<?php
$variable="PHP";

var_dump($variable); //this function returns data types and value

echo "Hello $variable ";

$inte = 589;
var_dump($inte);

$boolean = true;
$array= array("Joyanta", "Toma", "Anik", "Jasia");
$null= null;
$x=(string)$inte;

class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);
  var_dump($x);
  var_dump($null);
  var_dump($array);
  var_dump($boolean);


?>