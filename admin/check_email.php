<?php
include('db.php');

// Get email from the POST request
$email = $conn->real_escape_string($_POST['email']);

// Check if the email exists in the blog_posts table
$query = "SELECT * FROM blog_posts WHERE email = '$email'";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    // Email exists
    echo "exists";
} else {
    // Email does not exist
    echo "not_exists";
}

$conn->close();
?>
