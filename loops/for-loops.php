<?php
// Process the form before rendering the HTML
$count = isset($_POST['count']) ? (int)$_POST['count'] : 0;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['increment'])) {
        $count++;
    }
    if (isset($_POST['reset'])) {
        $count = 0;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Tasbeeh Counter</title>
    <style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
    }

    .container {
        max-width: 300px;
        margin: auto;
        padding: 20px;
        border: 1px solid #ccc;
    }

    .counter {
        font-size: 30px;
        margin: 20px 0;
    }

    button {
        padding: 10px;
        margin: 5px;
        font-size: 18px;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tasbeeh Counter</h2>
        <div class="counter">Count: <?php echo $count; ?></div>
        <form method="post">
            <input type="hidden" name="count" value="<?php echo $count; ?>">
            <button type="submit" name="increment" class="increment">Increase</button>
            <button type="submit" name="reset" class="reset">Reset</button>
        </form>
    </div>
</body>

</html>