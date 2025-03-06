<?php
$db_Server = "localhost";
$db_User = "root";
$db_Pass = "";
$db_name = "plugindb";

try {
    $conn =  mysqli_connect($db_Server, $db_User, $db_Pass, $db_name);

    // Check if connection was successful
    if ($conn->connect_error) {
        throw new Exception("Database Connection failed: " . $conn->connect_error);
    }
} catch (mysqli_sql_exception) {
    echo ("Database Connection failed<br> ");
}
