<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reverse Number Counter</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
        }

        .container {
            max-width: 300px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
        }

        input,
        button {
            margin: 10px 0;
            padding: 5px;
        }

        .result {
            margin-top: 20px;
            border: 1px solid #ddd;
            padding: 10px;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Reverse Number Counter</h1>
        <form action="" method="post">
            <input type="number" name="userInput" placeholder="Enter a number" required>
            <button type="submit">Count</button>
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $userInput = isset($_POST['userInput']) ? (int)$_POST['userInput'] : 0;

            if ($userInput >= 0) {
                echo "<div class='result'>";
                echo "<h2>Counting from 0 to $userInput:</h2>";
                for ($i = $userInput; $i >= 0; $i--) {
                    echo $i . " ";
                }
                echo "</div>";
            } else {
                echo "<p>Please enter a non-negative number.</p>";
            }
        }
        ?>
    </div>
</body>

</html>