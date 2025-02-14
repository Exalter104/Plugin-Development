<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Is-Set Function</title>
</head>

<body>
    <form method="post">
        <h3>Check your data in Database</h3>
        <label>Enter username : </label><br>
        <input type="text" name="username"><br><br>
        <label>Enter password : </label><br>
        <input type="password" name="password"><br><br>
        <input type="submit" name="login" value="Log In">
    </form>
</body>

</html>
<?php

foreach ($_POST as $key => $value) {
    echo "{$key} = {$value}<br>";
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (empty($username)) {
        echo "Username is required";
        # code...
    } elseif (empty($password)) {
        echo "Password is required";
        # code...
    } else {
        // echo "Username is : {$username}<br> password : {$password}";
    }
}
?>