<?php
$servername = "localhost";  // MySQL server
$username = "root";         // MySQL username (default for XAMPP is "root")
$password = "";             // MySQL password (default is empty for XAMPP)
$dbname = "fcit_blog";      // Database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // If connection fails, stop execution and show error
}

// echo "Connected successfully!";  // This should print if the connection is successful
?>
