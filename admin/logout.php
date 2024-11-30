<?php
session_start();  // Start the session

// Destroy the session to log the user out
session_destroy();

// Redirect to the home page or any page after logout
header("Location: ../index.php?page=home");
exit();
?>
