<?php
session_start(); // Start the session
?>

<h3>Set — Update — Delete Session</h3>
<form action="" method="post">
    <label>Enter username:</label>
    <input type="text" name="username">
    <br><br>

    <button type="submit" value="set" name="button">Set Session</button>
    <button type="submit" value="display" name="button">Display Session</button>
    <button type="submit" value="delete" name="button">Delete Session</button>
</form>

<?php
if (isset($_POST["button"])) {
    $button = $_POST["button"];

    // Handle "Set Session" action
    if ($button == "set") {
        if (empty($_POST["username"])) {
            echo "Please enter a username before setting a session.";
        } else {
            if (isset($_SESSION["username"])) {
                echo "A session is already set with the value: " . htmlspecialchars($_SESSION["username"]) . ". Please delete the existing session before setting a new one.";
            } else {
                $_SESSION["username"] = $_POST["username"];
                echo "New session has been set!";
            }
        }
    }

    // Handle "Display Session" action
    if ($button == "display") {
        if (isset($_SESSION["username"])) {
            echo "Your current session value is: " . htmlspecialchars($_SESSION["username"]);
        } else {
            echo "No session found.";
        }
    }

    // Handle "Delete Session" action
    if ($button == "delete") {
        if (isset($_SESSION["username"])) {
            unset($_SESSION["username"]); // Remove the session variable
            echo "Successfully deleted the session.";
        } else {
            echo "No session to delete.";
        }
    }
}
?>