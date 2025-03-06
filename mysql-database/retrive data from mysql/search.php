<?php
include("database.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];

    // Secure the input to prevent SQL injection
    $username = mysqli_real_escape_string($conn, $username);

    $sql = "SELECT * FROM users WHERE user='$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo "ID: " . htmlspecialchars($row["id"]) . "<br>";
            echo "User: " . htmlspecialchars($row["user"]) . "<br>";
        }
    } else {
        echo "No user found!";
    }

    mysqli_close($conn);
}
?>