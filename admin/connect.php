<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "quizhunt";

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}

?>
