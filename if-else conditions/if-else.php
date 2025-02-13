<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salary & Voting Eligibility Checker</title>
    <style>
    body {
        text-align: center;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 20px;
        background-color: #f8f9fa;
    }

    .container {
        max-width: 500px;
        margin: auto;
        background: #ffffff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }

    input[type="text"],
    input[type="number"] {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    input[type="submit"] {
        background-color: #28a745;
        color: white;
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        width: 100%;
    }

    input[type="submit"]:hover {
        background-color: #218838;
    }

    .result {
        margin-top: 20px;
        font-weight: bold;
        color: #333;
    }
    </style>
</head>

<body>
    <div class="container">
        <h2>Team Salary Calculator</h2>
        <form action="" method="post">
            <label>Enter your name:</label><br>
            <input type="text" name="name" required><br>

            <label>Enter your working hours:</label><br>
            <input type="number" name="hours" required><br>

            <input type="submit" name="salary_submit" value="Calculate Salary">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["salary_submit"])) {
            $bonus_threshold = 200;
            $bonus_amount = 5000;
            $hourly_rate = 220;

            $name = htmlspecialchars($_POST["name"]);
            $hours = (int) $_POST["hours"];

            $salary = $hours * $hourly_rate;

            echo "<div class='result'>";
            if ($hours > $bonus_threshold) {
                $total_salary = $salary + $bonus_amount;
                echo "Congratulations, $name! You have earned a bonus.<br>";
                echo "Your base salary is $salary, and with the bonus, your total salary is: $total_salary.";
            } else {
                echo "$name, your salary is $salary.";
            }
            echo "</div>";
        }
        ?>
    </div><br>

    <!-- <div class="container">
        <h2>Voting Eligibility Checker</h2>
        <form action="" method="post">
            <label>Enter your name:</label><br>
            <input type="text" name="voter_name" required><br>

            <label>Enter your age:</label><br>
            <input type="number" name="age" required><br>

            <input type="submit" name="vote_submit" value="Check Eligibility">
        </form>

     <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["vote_submit"])) {
            $age_eligibility = 18;

            $voter_name = htmlspecialchars($_POST["voter_name"]);
            $age = (int) $_POST["age"];

            echo "<div class='result'>";
            if ($age >= $age_eligibility) {
                echo "Yes, $voter_name! You are eligible to vote.";
            } else {
                echo "Sorry, $voter_name. You are not eligible to vote.";
            }
            echo "</div>";
        }
        ?> 
    </div>
</body>

</html>