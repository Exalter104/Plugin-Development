<?php

// VARIABLES

// Example of without variable (hard coding)
echo "sheraz1<br>";

// Example of using variable
$name = "sheraz khan";
echo $name . "<br>";
?>


<?php
 //Local Variables
function locallVariable() {
    $x1 = 25; // local scope
    echo "<p>Variable x inside function is: $x1</p>";
} 

locallVariable();
?>

<?php
 //Global Variables
$x = 5; // global scope
 
function myTest() {
  // using x inside this function will generate an error
 // echo "<p>Variable x inside function is: $x</p>";
} 
myTest();
echo "<p>Variable x outside function is: $x</p>";
?>


<?php 
//global Keywords

$x3 = 45;
function globalKeyword() {

 global $x3;
 echo $x3;
}
globalKeyword();

?>