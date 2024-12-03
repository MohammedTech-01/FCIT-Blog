<?php
// gallery.php
?>
<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Image Gallery</title>
</head>

<body>
    <div id="gallery-container">
        <h1>Image Gallery</h1>

        <!-- Thumbnails of images -->
        <div class="thumbnails">
            <img src="images/blogGallery.png" alt="Image 1" class="thumbnail" />
            <img src="images/blogGallery2.png" alt="Image 2" class="thumbnail" />
            <img src="images/blogGallery3.png" alt="Image 3" class="thumbnail" />
            <img src="images/blogGallery4.png" alt="Image 4" class="thumbnail" />
        </div>

        <!-- The larger display area for the clicked image -->
        <div class="image-display">
            <img id="displayed-image" src="images/blogGallery.png" alt="Displayed Image" />
        </div>
    </div>

    <script type="text/javascript" src="../script/gallery-image.js"></script>
</body>

</html>
