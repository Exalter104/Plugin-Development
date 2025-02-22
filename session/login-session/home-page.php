<?php
session_start();
if (!isset($_SESSION["username"])) {
    header("Location: login-page.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="styless.css">
</head>

<body>

    <div class="container">
        <h3>Welcome, <?php echo htmlspecialchars($_SESSION["username"]); ?>!</h3>

        <form action="" method="post">
            <button type="submit" name="logout" class="logout-btn">Logout</button>
        </form>

        <?php
        if (isset($_POST["logout"])) {
            session_destroy();
            header("Location: login-page.php");
            exit();
        }
        ?>
    </div>

</body>

</html>