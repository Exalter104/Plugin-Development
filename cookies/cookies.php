<h3>Set — Update — Delete Cookies</h3>
<form action="" method="post">
    <label>Enter username:</label>
    <input type="text" name="username">
    <br><br>

    <button type="submit" value="set" name="button">Set Cookie</button>
    <button type="submit" value="display" name="button">Display Cookie</button>
    <button type="submit" value="delete" name="button">Delete Cookie</button>
</form>

<?php
if (isset($_POST["button"])) {
    $button = $_POST["button"];

    // Handle "Set Cookie" action
    if ($button == "set") {
        if (empty($_POST["username"])) {
            echo "Please enter a username before setting a cookie.";
        } else {
            if (isset($_COOKIE["username"])) {
                echo "A cookie is already set with the value: " . htmlspecialchars($_COOKIE["username"]) . ". Please delete the existing cookie before setting a new one.";
            } else {
                setcookie("username", $_POST["username"], time() + (86400 * 4), "/");
                echo "New cookie has been set!";
            }
        }
    }

    // Handle "Display Cookie" action
    if ($button == "display") {
        if (isset($_COOKIE["username"])) {
            echo "Your current cookie value is: " . htmlspecialchars($_COOKIE["username"]);
        } else {
            echo "No cookie found.";
        }
    }

    // Handle "Delete Cookie" action
    if ($button == "delete") {
        if (isset($_COOKIE["username"])) {
            setcookie("username", "", time() - 3600, "/"); // Expire the cookie
            echo "Successfully deleted the previous cookie.";
        } else {
            echo "No cookie to delete.";
        }
    }
}
?>