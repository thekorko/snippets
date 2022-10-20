<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  public $name;
  public $color;
  public $flavor;
  public $weight;

  function set_Fruit($name,$color,$flavor,$weight,$unit) {
  	$this->name = $name;
    $this->color = $color;
    $this->flavor = $flavor;
    $this->weight = $weight;
    $this->unit = $unit;
  }
}
$apple = new Fruit();
$apple->name = "Apple";
$apple->color = "Red";
$apple->flavor = "Sweet Acid";
$apple->weight = 200.0;
$apple->unit = "g";


echo "<br>$apple->name<br>";
var_dump($apple);

$banana = new Fruit();
$banana->set_Fruit("banana","yellow","Sweet Tasty",235.5,"g");
echo "<br>$banana->name<br>";
var_dump($banana);
?>

</body>
</html>
