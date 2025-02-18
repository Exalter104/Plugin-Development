<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            text-align: center;
            background: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 300px;
        }

        h3 {
            color: #333;
        }

        input[type="number"] {
            padding: 10px;
            width: 90%;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        .buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 10px;
        }

        button {
            padding: 10px;
            width: 30%;
            background-color: #C02D2DFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button:hover {
            background-color: #551717FF;
        }

        .msg {
            font-weight: bold;
            color: #333;
            margin-top: 20px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h3> Calculator</h3>

        <form method="post">
            <input type="number" name="num1" placeholder="Enter first number" required
                value="<?php echo isset($_POST['num1']) ? $_POST['num1'] : ''; ?>">
            <input type="number" name="num2" placeholder="Enter second number" required
                value="<?php echo isset($_POST['num2']) ? $_POST['num2'] : ''; ?>">

            <div class="buttons">
                <button type="submit" name="operation" value="+">+</button>
                <button type="submit" name="operation" value="-">-</button>
                <button type="submit" name="operation" value="/">/</button>
            </div>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['operation'])) {
            $num1 = $_POST['num1'];
            $num2 = $_POST['num2'];
            $operation = $_POST['operation'];
            $result = "";

            switch ($operation) {
                case "+":
                    $result = $num1 + $num2;
                    break;
                case "-":
                    $result = $num1 - $num2;
                    break;
                case "/":
                    if ($num2 == 0) {
                        $result = "Error: Division by zero!";
                    } else {
                        $result = $num1 / $num2;
                    }
                    break;
            }

            echo "<p class='msg'>Result: $result</p>";
        }
        ?>
    </div>

</body>

</html>