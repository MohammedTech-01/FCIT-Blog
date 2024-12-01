<?php include 'includes/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FCIT Blog</title>
    <link rel="stylesheet" href="global/main.css">
</head>

<body>
    <div class="container">
        <?php
        // Default page content
        if (!isset($_GET['page'])) {
            include 'pages/home.php';  // Default to home page
        } else {
            // Dynamically load the page based on the URL
            $page = $_GET['page'];
            $allowed_pages = [
                'home',
                'resume',
                'login',
                'signup',
                'services',
                'about',
                'contact',
                'blog',
                'fullblog',
                'writeBlog',
                'events',
                'loginSignup',
                'feedback',
                'gallery_images'
            ]; // Allowed page names
        
            if (in_array($page, $allowed_pages)) {
                include "pages/{$page}.php"; // Dynamically include the requested page
            } else {
                echo '<p>Page not found.</p>';
            }
        }
        ?>
    </div>

    <?php include 'includes/footer.php'; ?>
</body>

</html>
