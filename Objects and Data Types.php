OBJECTS AND DATA TYPES
The following are the various data types;
    $string = "Number";
    $int = 3456;
    $doubleFloat = 745.23;
    $bool = true;
    $array = array("Volvo","BMW","Toyota");

Lastly there is an Object data Type
When the individual objects are created, they inherit all the properties and behaviors from the class,
but each object will have different values for the properties. A class is an objects' template

<?php
class Car { //Car is the class while color and model are the properties
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

$myCar = new Car("black", "Volvo");
echo $myCar -> message();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> message();
?>


