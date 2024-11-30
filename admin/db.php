<?php
// Database connection details
$servername = getenv('DB_HOST') ?: "127.0.0.1";  // Default to 127.0.0.1 (local server)
$username = getenv('DB_USER') ?: "root";         // Default to "root" for local setup
$password = getenv('DB_PASS') ?: "";            // Default to no password for local setup
$dbname = getenv('DB_NAME') ?: "fcit_blog";     // Default database name
$port = getenv('DB_PORT') ?: "3306";            // Default MySQL/MariaDB port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Stop execution if connection fails
}

// Uncomment for debugging during development
// echo "Connected successfully!";
?>
