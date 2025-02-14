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

        <input type="checkbox" name="credit_card" value="Visa">Visa<br><br>
        <input type="checkbox" name="master_card" value="Master Card">Master Card<br><br>
        <input type="checkbox" name="express_card" value="American Express">American Express<br><br>

        <input type="submit" name="submit" value="Submit">
    </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {
    if (isset($_POST["credit_card"])) {

        echo "You use Visa Card for transections<br>";
    }
    if (isset($_POST["master_card"])) {

        echo "You use Master Card for transections<br>";
    }
    if (isset($_POST["express_card"])) {

        echo "You use American Express Card for transections<br>";
    }

    // empty()
    if (empty($_POST["credit_card"])) {

        echo "I am not use Visa Card <br>";
    }
    if (empty($_POST["master_card"])) {

        echo "I am not use Master Card <br>";
    }
    if (empty($_POST["express_card"])) {

        echo "I am not use American Express Card <br>";
    }
}
?>