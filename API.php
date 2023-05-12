<?php

// Set the database credentials
$servername = "challenge10";
$username = "challenge10";
$password = "12345";
$dbname = "challenge10";

// Create a database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>