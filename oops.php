<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OoPs</title>
</head>
<body>

<?php
class Fruit {

  public $name;
  public $color;
  public $quantity;


  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
  function set_color($color) {
    $this->color = $color;
  }
  function get_color() {
    return $this->color;
  }

  function set_quantity($quantity) {
    $this->quantity = $quantity;
  }
  function get_quantity() {
    return $this->quantity;
  }
}

$apple = new Fruit();
$apple->set_name('Apple');
$apple->set_color('Red');
$apple->set_quantity('3');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
echo "<br>";
echo "Quantity: " .  $apple->get_quantity();
echo "<br>";


$orange = new Fruit();
$orange->set_name('Orange');
$orange->set_color('Orange');
$orange->set_quantity('5');
echo "Name: " . $orange->get_name();
echo "<br>";
echo "Color: " .  $orange->get_color();
echo "<br>";
echo "Quantity: " .  $orange->get_quantity();
?>


    
</body>
</html>