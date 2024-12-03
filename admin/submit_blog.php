<?php
include('db.php');
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ../index.php?page=login&message=login_required");
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and escape input values
    $username = $_SESSION['username'];
    $title = $conn->real_escape_string(trim($_POST['title']));
    $author = $conn->real_escape_string(trim($_POST['author']));
    $email = $conn->real_escape_string(trim($_POST['email']));
    $category = $conn->real_escape_string(trim($_POST['category']));
    $content = $conn->real_escape_string(trim($_POST['content']));
    $blog_type = $conn->real_escape_string(trim($_POST['blog_type']));
    $tags = isset($_POST['tags']) ? implode(",", $_POST['tags']) : "";

    // Validate mandatory fields
    if (empty($title) || empty($author) || empty($email) || empty($category) || empty($content) || empty($blog_type)) {
        header("Location: ../index.php?page=blog&message=missing_fields");
        exit();
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: ../index.php?page=blog&message=invalid_email");
        exit();
    }

    // Check if email already exists in the blog_posts table
    $check_email_query = "SELECT * FROM blog_posts WHERE email = '$email'";
    $result = $conn->query($check_email_query);

    if ($result->num_rows > 0) {
        // If email exists, redirect with an error message
        header("Location: ../index.php?page=blog&message=email_exists");
        exit();
    }

    // Handle image upload
    // $image_path = NULL;
    // if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
    //     // Check the file type (ensure it's an image)
    //     $allowed_types = ['image/jpeg', 'image/png', 'image/gif'];
    //     $file_type = $_FILES["image"]["type"];
        
    //     if (in_array($file_type, $allowed_types)) {
    //         $image_name = time() . "_" . basename($_FILES["image"]["name"]);
    //         $target_dir = "../uploads/";
    //         $target_file = $target_dir . $image_name;

    //         // Check if uploads folder exists and is writable
    //         if (!is_dir($target_dir)) {
    //             mkdir($target_dir, 0755, true);
    //         }

    //         if (is_writable($target_dir)) {
    //             if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    //                 $image_path = "../uploads/" . $image_name;
    //             } else {
    //                 die("Error: Unable to upload file. Check folder permissions.");
    //             }
    //         } else {
    //             die("Error: Upload folder is not writable.");
    //         }
    //     } else {
    //         header("Location: ../index.php?page=blog&message=invalid_file_type");
    //         exit();
    //     }
    // }

    // Insert blog post into the database
    $sql = "INSERT INTO blog_posts (username, title, author, email, category, content, blog_type, tags) 
            VALUES ('$username', '$title', '$author', '$email', '$category', '$content', '$blog_type', '$tags')";

    if ($conn->query($sql) === TRUE) {
        // Redirect after successful blog post insertion
        header("Location: ../index.php?page=blog_post_done");
        exit();
    } else {
        // If there's an error in the SQL query
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
