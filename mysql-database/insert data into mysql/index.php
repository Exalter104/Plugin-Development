<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Registration</title>
    <link rel="stylesheet" href="styless.css">
</head>

<body>
    <div class="container">
        <h3>Register</h3>



        <form action="" method="post">
            <label>Enter Username:</label>
            <input type="text" name="username" required>

            <label>Enter Password:</label>
            <input type="password" name="password" required>

            <button type="submit" name="register">Register</button>
            <!-- Display success or error message -->
            <?php if (isset($_SESSION['message'])): ?>
            <p><?php echo $_SESSION['message']; unset($_SESSION['message']); ?></p>
            <?php endif; ?>
        </form>
    </div>
</body>

</html>

<?php
include "database-connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize user input
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // Validate inputs
    if (empty($username) || empty($password)) {
        $_SESSION['message'] = "Username and Password are required!";
        header("Location: index.php");
        exit();
    }

    // Hash the password securely
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    // Prepare SQL statement to prevent SQL injection
    $sql = "INSERT INTO users (user, password) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $username, $hashedPassword);
        if (mysqli_stmt_execute($stmt)) {
            $_SESSION['message'] = "User registered successfully!";
        } else {
            $_SESSION['message'] = "Error: " . mysqli_error($conn);
        }
        mysqli_stmt_close($stmt);
    } else {
        $_SESSION['message'] = "Error preparing statement: " . mysqli_error($conn);
    }

    // Close database connection
    mysqli_close($conn);

    // Redirect to avoid form resubmission
    header("Location: index.php");
    exit();
}
?>