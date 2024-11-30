<?php
include('db.php'); // Make sure the path to db.php is correct

// Test if the $conn variable is defined
if (!isset($conn)) {
    die("Database connection is not established.");
}

// Test the database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);  // Show error if connection fails
}

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form inputs
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm-password'];

    // Check if passwords match
    if ($password !== $confirm_password) {
        echo "Passwords do not match!";
        exit();
    }

    // Hash the password before storing it
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Check if email already exists
    $sql_check_email = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql_check_email);

    if ($result->num_rows > 0) {
        echo "Email is already registered!";
        exit();
    }

    // Insert new user into the database
    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$hashed_password')";

    if ($conn->query($sql) === TRUE) {
        // Redirect to logsign.php with action=signup
        header("Location: ../index.php?page=loginSignup&action=signup");
        exit();
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
