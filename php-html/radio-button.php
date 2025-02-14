<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio button</title>
</head>

<body>
    <form method="post">
        <h3>Select your credit card</h3>

        <input type="radio" name="credit_card" value="Visa">Visa<br><br>
        <input type="radio" name="credit_card" value="Master Card">Master Card<br><br>
        <input type="radio" name="credit_card" value="American Express">American Express<br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

<?php

if (isset($_POST["credit_card"])) {
    $credit_cards = $_POST["credit_card"];
    echo $credit_cards;
    switch ($credit_card) {
        case $_POST["Visa"]:
            echo "Visa Card Selected";
            break;
        case "Master Card":
            echo "Master Card Selected";
            break;
        case "American Express":
            echo "American Express Card Selected";
            break;
        default:
            echo "No Card Selected";
    }
}
?>