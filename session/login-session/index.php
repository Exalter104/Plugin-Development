<?php
header("Location: login-page.php");
exit();
?>
<!-- <?php

include "database-connection.php"; // Include database connection

if (isset($_POST["register"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        // Prepare SQL statement
        $sql = "INSERT INTO users (user, password) VALUES (?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);

            try {
                //runs the SQL command to insert data into the database.
                $execute = mysqli_stmt_execute($stmt);
                if ($execute) {
                    $_SESSION["message"] = "User registered successfully!";
                    $_SESSION["message_type"] = "success";
                }
            }
            // MySQL error code for duplicate entry
            catch (mysqli_sql_exception $e) {
                if ($e->getCode() == 1062) {
                    $_SESSION["message"] = "Username already exists. Please choose another.";
                    $_SESSION["message_type"] = "error";
                } else {
                    $_SESSION["message"] = "An error occurred. Please try again.";
                    $_SESSION["message_type"] = "error";
                }
            }

            mysqli_stmt_close($stmt); // Close statement
        } else {
            $_SESSION["message"] = "Something went wrong. Please try again.";
            $_SESSION["message_type"] = "error";
        }
    } else {
        $_SESSION["message"] = "Please fill in all fields.";
        $_SESSION["message_type"] = "error";
    }
}


?> -->