<?php
include('db.php');

// Fetch blog posts from the database
$sql = "SELECT * FROM blog_posts ORDER BY created_at DESC";
$result = $conn->query($sql);

$blogs = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $row['image'] = "../" . $row['image']; // Adjust relative path for frontend
        $blogs[] = $row;
    }
}

// Return data as JSON
header('Content-Type: application/json');
echo json_encode($blogs);

$conn->close();
?>
