<?php

// Define username and nickname variables
$username = "Muhammad sheraz";
$nickname = "khan-khilji";
$arrays = array("Muhammad", "Sheraz", "khan", "khilji");

// Applying various string functions
$usernames1 = strtoupper($username); // Convert to uppercase
$usernames2 = strtolower($username); // Convert to lowercase
$usernames3 = trim($username); // Remove extra spaces from start and end
$usernames4 = str_pad($username, 20, "*"); // Pad the string to 20 characters with '*'
$usernames5 = strrev($username); // Reverse the string
$usernames6 = str_shuffle($username); // Shuffle the characters randomly
$usernames7 = strlen($username); // Get the length of the string
$nickname8 = str_replace("-", " ", $nickname); // Replace '-' with spaces
$usernames9 = strcmp($username, "Muhammad sheraz"); // Compare strings
$usernames10 = explode(" ", $username); // Split the string into an array
$arrays = implode(" ", $arrays); // Combine array elements into a string


// Displaying results in a structured format
echo "<h3>String Function Types</h3>";
echo "<strong>Original Username:</strong> $username <br><br>";
echo "<strong>Uppercase (strtoupper):</strong> $usernames1 <br>";
echo "<strong>Lowercase (strtolower):</strong> $usernames2 <br>";
echo "<strong>Trimmed (trim):</strong> $usernames3 <br>";
echo "<strong>Padded (str_pad):</strong> $usernames4 <br>";
echo "<strong>Reversed (strrev):</strong> $usernames5 <br>";
echo "<strong>Shuffled (str_shuffle):</strong> $usernames6 <br>";
echo "<strong>String Length (strlen):</strong> $usernames7 <br>";
echo "<strong>Nickname (str_replace):</strong> $nickname8 <br>";
echo "<strong>String Comparison (strcmp):</strong> $usernames9 <br>";
echo "<strong>Array  (implode):</strong> $arrays <br>";
// echo "<strong>Array  (explode):</strong> $usernames10 <br>";