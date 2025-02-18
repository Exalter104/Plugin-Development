<?php
// Check if a cookie is already set
$theme = isset($_COOKIE["theme"]) ? $_COOKIE["theme"] : "light";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $selectedTheme = $_POST["theme"];
    setcookie("theme", $selectedTheme, time() + (86400 * 30), "/"); // 30 days
    $theme = $selectedTheme;
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Theme Selection</title>
    <style>
    body {
        background-color: <?=$theme=="dark"? "#222": "#fff";
        ?>;
        color: <?=$theme=="dark"? "#fff": "#000";
        ?>;
        text-align: center;
        padding: 50px;
    }
    </style>
</head>

<body>
    <h2>Session and Cookies</h2>
    <form method="post">
        <select name="theme">
            <option value="light" <?= $theme == "light" ? "selected" : "" ?>>Light Mode</option>
            <option value="dark" <?= $theme == "dark" ? "selected" : "" ?>>Dark Mode</option>
        </select>
        <button type="submit">Save</button>
    </form>
    <p>Current Theme: <b><?= ucfirst($theme); ?></b></p>
</body>

</html>