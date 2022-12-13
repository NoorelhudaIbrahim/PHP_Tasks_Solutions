<?php
//                      Scaler types

// String
$thisIsString = "Hello there";
echo '<br>';
echo $thisIsString;
echo '<br>';
echo gettype($thisIsString);
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
// Integer
$thisIsInteger = 500;
echo '<br>';
echo '<br>';
echo $thisIsInteger;
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
// Float , Double
$thisIsFloat = 99.5;
echo '<br>';
echo '<br>';
echo $thisIsFloat;
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
// Boolean 
$thisIsBoleen = true;
$thisIsBoleen = false;
echo '<br>';
echo '<br>';
$Number = 50;
echo gettype($Number > 10);
echo '<br>';
if ($Number > 60) {
echo "This is true";
}else {
    echo "This is false";
}
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
// Array 
$ThisIsArray = ["Asem" , "Noqati" , "Tabark" , "Maslmani" , "Ruba"];
echo '<br>';
echo '<br>';
print_r($ThisIsArray);
echo '<br>';
echo '<br>';
echo $ThisIsArray[1];
echo '<br>';
echo $ThisIsArray[2];
echo '<br>';
echo $ThisIsArray[3];
echo '<br>';
echo $ThisIsArray[4];
echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
//Classes & Objects


class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name('Apple');
$banana->set_name('Banana');
echo "<br>";
echo $apple->get_name();
echo "<br>";
echo $banana->get_name();

echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
$nl = NULL;
    echo $nl;   //it will not give any output
    echo "<br>";
    $x = "Hello world!";
    $x = null;
    var_dump($x);

    echo '<br>';
echo '<br>';
echo "<------------------------------------------------------>";
