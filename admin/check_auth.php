<?php
// Start the session to track user authentication
session_start();

// Check if the user is logged in by verifying the session variable
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page with an error message if not logged in
    header("Location: ../index.php?page=login&message=login_required");
    exit();
}

// Optionally, you can include additional checks here, such as:
// - Checking user roles
// - Validating session expiration
?>
