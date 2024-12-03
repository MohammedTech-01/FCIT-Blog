<?php
include realpath(__DIR__ . '/../admin/db.php'); // Ensure the correct path to db.php

// Check if the blog ID is set and valid
$blog_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;

if ($blog_id <= 0) {
    die("Invalid blog post ID.");
}

// Fetch the blog post from the database
$sql = "SELECT * FROM blog_posts WHERE id = ?";
$stmt = $conn->prepare($sql);

if (!$stmt) {
    die("Error preparing SQL: " . $conn->error);
}

$stmt->bind_param("i", $blog_id);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    die("Blog post not found.");
}

$blog = $result->fetch_assoc();
?>

<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title><?php echo htmlspecialchars($blog['title']); ?> - FCIT Blog</title>
</head>
<body>
    <main class="fullblog-page">
        <!-- Left column: Full blog post -->
        <section class="blog-content">
            <article class="blog-post">
                <!-- Blog Image -->
                <!-- <img src="../uploads/<?php echo htmlspecialchars($blog['image']); ?>" 
                     alt="<?php echo htmlspecialchars($blog['title']); ?>" 
                     class="blog-img" /> -->

                <!-- Blog Title -->
                <h1 class="blog-title"><?php echo htmlspecialchars($blog['title']); ?></h1>

                <!-- Author and Date -->
                <address class="blog-author">
                    Written by <cite><?php echo htmlspecialchars($blog['author']); ?></cite>, 
                    <?php echo date('F Y', strtotime($blog['created_at'])); ?>
                </address>

                <!-- Blog Content -->
                <p><?php echo nl2br(htmlspecialchars($blog['content'])); ?></p>
            </article>
        </section>

        <!-- Right column: Suggested blogs -->
        <aside class="suggested-blogs">
            <h2>Suggested Blogs</h2>
            <ul>
                <li><a href="#">Why AI?</a></li>
                <li><a href="#">How Python Helps You?</a></li>
                <li><a href="#">Why You Should Start Programming with C++?</a></li>
            </ul>
        </aside>
    </main>
</body>
</html>
