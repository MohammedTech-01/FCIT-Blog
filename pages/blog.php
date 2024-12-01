<?php
// Check if there's a message in the URL
if (isset($_GET['message'])) {
    $message = $_GET['message'];

    // Display corresponding message
    switch ($message) {
        case 'email_exists':
            echo '<div class="alert alert-warning">The email address is already associated with an existing blog post. Please use a different email address.</div>';
            break;
        case 'missing_fields':
            echo '<div class="alert alert-danger">Please fill in all mandatory fields.</div>';
            break;
        case 'invalid_email':
            echo '<div class="alert alert-danger">The email address is invalid. Please enter a valid email.</div>';
            break;
        case 'invalid_file_type':
            echo '<div class="alert alert-danger">Invalid file type. Only JPG, PNG, and GIF images are allowed.</div>';
            break;
        case 'blog_posted':
            echo '<div class="alert alert-success">Your blog post has been successfully submitted!</div>';
            break;
        default:
            break;
    }
}
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
</head>
</html>


<main class="blog-page">
    <!-- Left column: Filter/Navigation -->
    <aside class="blog-nav">
        <h2>Filter Blogs</h2>
        <ul>
            <li><a href="#">AI</a></li>
            <li><a href="#">Programming</a></li>
            <li><a href="#">Cybersecurity</a></li>
            <li><a href="#">Software Engineering</a></li>
            <li><a href="#">Database</a></li>
        </ul>
    </aside>

    <!-- Middle column: Blog content -->
    <section class="blog-content">
        <!-- Blog posts will be dynamically loaded here -->
    </section>

    <!-- Right column: Suggested blogs -->
    <aside class="suggested-blogs">
        <h2>Suggested Blogs</h2>
        <ul>
            <li><a href="#">Why AI?</a></li>
            <li><a href="#">How Python Helps You?</a></li>
            <li><a href="#">Why Start Programming with C++?</a></li>
        </ul>
    </aside>

    <script src="/CPCS403-Final/script/blogs.js"></script>
</main>