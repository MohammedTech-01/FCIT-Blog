<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">



<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Blog Page</title>
</head>

<body>
    <?php
    // Check if there's a message in the URL
    if (isset($_GET['message'])) {
        $message = $_GET['message'];

        // Display corresponding message
        echo '<div class="alert">';
        switch ($message) {
            case 'email_exists':
                echo '<p>The email address is already associated with an existing blog post. Please use a different email address.</p>';
                break;
            case 'missing_fields':
                echo '<p>Please fill in all mandatory fields.</p>';
                break;
            case 'invalid_email':
                echo '<p>The email address is invalid. Please enter a valid email.</p>';
                break;
            case 'invalid_file_type':
                echo '<p>Invalid file type. Only JPG, PNG, and GIF images are allowed.</p>';
                break;
            case 'blog_posted':
                echo '<p>Your blog post has been successfully submitted!</p>';
                break;
            default:
                echo '<p>Unknown message.</p>';
                break;
        }
        echo '</div>';
    }
    ?>
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
            <h2>Blog Posts</h2>
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
    </main>

    <script src="/CPCS403-Final/script/blogs.js"></script>
</body>

</html>