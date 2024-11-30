<?php
// Database connection details
$servername = "mysql.railway.internal"; // Replace with the Host from Railway
$username = "root"; // Replace with the Username from Railway
$password = "krpwAlBicibOBGAmKSzGXaEfGeRbVZQs"; // Replace with the Password from Railway
$dbname = "railway"; // Replace with the Database Name from Railway
$port = "3306"; // Replace with the Port from Railway

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname, $port);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); // Stop execution if connection fails
}

// Uncomment for debugging during development
// echo "Connected successfully!";
?>
