<?php
// Use environment variables for deployment (e.g., on Railway)
$servername = getenv('DB_HOST') ?: "localhost"; // Default to localhost for local development
$username = getenv('DB_USER') ?: "root";        // Default to "root" for local development
$password = getenv('DB_PASS') ?: "";           // Default to empty for local development
$dbname = getenv('DB_NAME') ?: "fcit_blog";    // Default to "fcit_blog" for local development
$port = getenv('DB_PORT') ?: "3306";           // Default MySQL/MariaDB port

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // If connection fails, stop execution and show error
}

// Uncomment the line below for debugging to confirm successful connection
// echo "Connected successfully!";
?>
