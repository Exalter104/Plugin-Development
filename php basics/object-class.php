<!DOCTYPE html>
<html>
<body>

<?php
// class is  a blue print
class Car{

//properties of the class (car)

public $model;
public $color;
public $made_in;

// constructor of the class when the object is created
public function __construct($color , $model, $made_in){

$this->color=$color;
$this->model=$model;
$this->made_in=$made_in;

}

public function showDetail(){
return "My car  is "."". $this->color."".  $this->model. ".";

}
}
$car1 = new Car("Red", "Toyota", "japan");
$car2 = new Car("Blue", "BMW", "japan");
$car3 = new Car("Black", "Honda", "japan");
// Displaying car details
echo $car1->showDetail(); // Output: This car is a Red Toyota.
echo "<br>";
echo $car2->showDetail(); // Output: This car is a Blue BMW.
echo "<br>";
echo $car3->showDetail(); // Output: This car is a Black Honda.
?>

</body>
</html>
