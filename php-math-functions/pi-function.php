<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pi Function</title>
</head>

<body>

    <form action="pi-function.php" method="post">
        <label> Enter the radius of circle</label>
        <input type="text" name="radius">
        <input type="submit" value="submit">

    </form>
</body>


</html>

<?php
$radius = $_POST["radius"];
$circumference = null;
$area = null;
$circumference = 2 * pi() * $radius;
echo "Circumference = " . round($circumference, 2) . " cm <br><br>";

$area =  pi() * pow($radius, 2);
$area = round($area, 2);
echo "The area is : {$area} cm^2";
?>