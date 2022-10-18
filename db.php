<?php
// instantiation
$mysqli = new mysqli("localhost", "root", "", "Cars");

// Check connection
if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli->connect_error;
    exit();
}
echo "Connection established successfully";
