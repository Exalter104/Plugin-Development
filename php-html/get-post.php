<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get-Post-form</title>
</head>

<body>

    <form action="get-post.php" method="post">
        <label>Enter Quantity :</label><br><br>
        <input type="number" name="quantity"><br>
        <label></label><br>

        <input type="submit" value="Log in"><br>
    </form>

</body>

</html>
<?php

$price = 5;
$quantity = (int)$_POST["quantity"];
$total = $quantity * $price;
echo "you have ordered :  {$quantity} x {$price} <br>";
echo "Total Price is : $total <br>";


?>