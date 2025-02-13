<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Function</title>
</head>

<body>
    <form action="math-function.php" method="post">
        <label> Enter x :</label>
        <input type="text" name="num1"><br><br>
        <label> Enter y:</label>
        <input type="text" name="num2"><br><br>
        <label> Enter y:</label>
        <input type="text" name="num3"><br><br>
        <input type="submit" value="total"> <input type="submit" value="total">

    </form>
</body>

</html>

<?php
$numberx = $_POST["num1"];
$numbery = $_POST["num2"];
$numberz = $_POST["num3"];

$total = null;
// absolute function
$total = abs($number);

// Rounding Nmber
$total = round($number);

// power function
$total = pow($numberx, $numbery);

// square root function
$total = sqrt($numberx);

// maximum value of above three
$total = max($numberx, $numbery, $numberz);
echo "<p>maximum Value: $total</p>";


// minimum value of above three
$total = min($numberx, $numbery, $numberz);
echo "<p>Minimum Value: $total</p>";

// random number 
$total = rand($numberx, $numbery,);
echo "<p>Minimum Value: $total</p>";

?>