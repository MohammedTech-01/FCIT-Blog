<?php
session_start();  // Start the session to store user data

include('db.php');  // Include the database connection

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Prepare SQL query to fetch the user by email
    $sql = "SELECT * FROM users WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $email);  // Bind email parameter to prevent SQL injection
    $stmt->execute();
    $result = $stmt->get_result();

    // Check if the user exists
    if ($result->num_rows > 0) {
        // Fetch the user data
        $user = $result->fetch_assoc();

        // Verify the password
        if (password_verify($password, $user['password'])) {
            // Password is correct, log the user in
            $_SESSION['user_id'] = $user['id'];        // Store user_id in session
            $_SESSION['username'] = $user['username'];  // Store username in session
            $_SESSION['email'] = $user['email'];        // Store email in session

            // Redirect to the home page or dashboard after login
            header("Location: ../index.php?page=loginSignup&action=login");
            exit();
        } else {
            // Password is incorrect
            echo "Invalid password. Please try again.";
        }
    } else {
        // No user found with that email
        echo "No user found with this email address.";
    }

    $stmt->close();  // Close the prepared statement
}

$conn->close();  // Close the database connection
?>
