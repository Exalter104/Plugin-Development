<?php
$db_Server = "localhost";
$db_User = "root";
$db_Pass = "";
$db_name = "plugindb";

// Create connection
$conn = mysqli_connect($db_Server, $db_User, $db_Pass, $db_name);

// Check connection
if (!$conn) {
    die("Database Connection failed: " . mysqli_connect_error());
}
?>