<?php
session_start();  // Start the session

// Check if the user is logged in
if (!isset($_SESSION['user_id'])) {
    // Redirect to the login page if the user is not logged in
    header("Location: login.html");
    exit();
}

// User is logged in, display dashboard content
echo "Welcome, " . $_SESSION['username'] . "!<br>";
echo "Your email: " . $_SESSION['email'] . "<br>";
// You can add more content here for the logged-in user

?>
