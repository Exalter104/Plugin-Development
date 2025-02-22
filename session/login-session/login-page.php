<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styless.css">
</head>

<body>

    <div class="container">
        <h3>Login Session</h3>

        <form action="" method="post">
            <label>Enter Username:</label>
            <input type="text" name="username" required>

            <label>Enter Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="login">Login</button>
        </form>

        <?php
        if (isset($_POST["login"])) {
            if (!empty($_POST["username"]) && !empty($_POST["password"])) {
                $_SESSION["username"] = $_POST["username"];
                $_SESSION["password"] = $_POST["password"];
                header("Location: home-page.php");
                exit();
            } else {
                echo '<p class="error">Please enter a username and password.</p>';
            }
        }
        ?>
    </div>

</body>

</html>