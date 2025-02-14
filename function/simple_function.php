<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check Exalters Birthday</title>
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

        input[type="text"] {
            padding: 10px;
            width: 100%;
            margin: 10px 0;
            border-radius: 5px;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #C02D2DFF;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
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
        <h3>Check Exalters Birthday</h3>
        <form method="post">
            <input type="text" name="teamName" placeholder="Enter Team Name">
            <input type="submit" value="Check">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && !empty($_POST["teamName"])) {
            // Function to check birthday
            function checkname($name)
            {
                $exalters = [
                    "Ikram" => "21 Dec",
                    "Saqib" => "23 March",
                    "Sheraz" => "21 October",
                    "Sughra" => "21 January",
                    "Sarran" => "31 Dec",
                    "Mueen" => "12 May",
                    "Bilal" => "27 Nov"
                ];
                return isset($exalters[$name]) ? " $name's Birthday: " . $exalters[$name] : "No record found.";
            }
            // Get and format the input name
            $birthday_boy = ucfirst(strtolower($_POST["teamName"]));
            // Display the birthday message
            echo "<p class='msg'>" . checkname($birthday_boy) . "</p>";
        }
        ?>

    </div>

</body>

</html>