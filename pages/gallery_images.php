<?php
// gallery.php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Gallery</title>
    <link rel="stylesheet" href="css/styles.css">
</head>

    <div id="gallery-container">
        <h1>Image Gallery</h1>

        <!-- Thumbnails of images -->
        <div class="thumbnails">
            <img src="images/blogGallery.png" alt="Image 1" class="thumbnail">
            <img src="images/blogGallery2.png" alt="Image 2" class="thumbnail">
            <img src="images/blogGallery3.png" alt="Image 3" class="thumbnail">
            <img src="images/blogGallery4.png" alt="Image 4" class="thumbnail">
        </div>

        <!-- The larger display area for the clicked image -->
        <div class="image-display">
            <img id="displayed-image" src="images/blogGallery.png" alt="Displayed Image">
        </div>


        <script src="/CPCS403-Final/script/gallery-image.js"></script>

</html>