<?php
ob_start();
?>
<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>FCIT Blog</title>
    <link rel="stylesheet" href="global/main.css" />
</head>

<body>
    <div class="container">
        <?php include 'includes/header.php'; ?>
        <?php
        // Check if a page parameter is set
        $page = isset($_GET['page']) ? $_GET['page'] : 'home';

        // List of allowed pages for security
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
        ];

        // Include the requested page if it's allowed
        if (in_array($page, $allowed_pages)) {
            include "pages/{$page}.php";
        } else {
            echo '<p>Page not found.</p>';
        }
        ?>

    </div>
    <?php include 'includes/footer.php'; ?>
</body>