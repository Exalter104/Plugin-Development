<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Validation Function</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
    }

    .container {
        background: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    h2 {
        text-align: center;
        color: #333;
    }

    label {
        font-weight: bold;
        display: block;
        margin-top: 10px;
    }

    input {
        width: 100%;
        padding: 8px;
        margin-top: 5px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    #submit {
        background-color: #BE3E3EFF;
        color: white;
        border: none;
        cursor: pointer;
        font-size: 16px;
        padding: 10px;
        margin-top: 15px;
        width: 100%;
    }

    #submit:hover {
        background-color: #882D21FF;
    }

    .result {
        margin-top: 15px;
        padding: 10px;
        background: #000000FF;
        border-left: 5px solid #FF1212FF;
        color: #FFFFFFFF;
    }
    </style>
</head>

<body>

    <div class="container">
        <h2 style="color: #BE3E3EFF;">Validation Filter Test</h2>
        <form method="post">
            <label>Username</label>
            <input type="text" name="username" placeholder="Enter your name">

            <label>Phone Number</label>
            <input type="text" name="phone" placeholder="Enter your phone number">

            <label>Email</label>
            <input type="email" name="email" placeholder="Enter your email">

            <input type="submit" name="check_security" id="submit" value="Check Security">
        </form>

        <?php
        if (isset($_POST["check_security"])) {
            // Validation Filter
            $name = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
            $phone = filter_input(INPUT_POST, "phone", FILTER_VALIDATE_INT);
            $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);
            if (empty($name) || empty($phone) || empty($email)) {
                echo "All fields are required!";
            } else {
            }
            echo "<div class='result'>";
            echo "<strong>Sanitized Name:</strong> $name <br>";
            echo "<strong>Sanitized Phone:</strong> $phone <br>";
            echo "<strong>Sanitized Email:</strong> $email";
            echo "</div>";
        }

        ?>
    </div>

</body>

</html>