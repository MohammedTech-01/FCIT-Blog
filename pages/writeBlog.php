<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Post a Blog</title>
    <script type="text/javascript" src="CPCS403-Final/script/validation.js"></script> <!-- External JavaScript for form validation -->
    <script type="text/javascript" src="CPCS403-Final/script/file-upload.js"></script>
</head>
<body>
    <main class="write-blog-page">
        <section class="write-blog-container">
            <h1>Post a Blog</h1>
            <form action="admin/submit_blog.php" method="post" enctype="multipart/form-data" class="blog-form">
                <fieldset>
                    <legend>Blog Details</legend>
                    <div class="form-group">
                        <label for="title">Blog Title:</label>
                        <input type="text" id="title" name="title" placeholder="Enter your blog title" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="author">Author Name:</label>
                        <input type="text" id="author" name="author" placeholder="Enter your name" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" placeholder="Enter your email" required="required" onblur="checkEmail();" />
                        <div id="email_error" style="color: red;"></div> <!-- Display email validation message -->
                    </div>

                    <div class="form-group">
                        <label for="category">Category:</label>
                        <select id="category" name="category" required="required">
                            <option value="AI">AI</option>
                            <option value="Programming">Programming</option>
                            <option value="Cybersecurity">Cybersecurity</option>
                            <option value="Software Engineering">Software Engineering</option>
                            <option value="Database">Database</option>
                        </select>
                    </div>
                </fieldset>
                <fieldset>
                    <legend>Content Details</legend>
                    <div class="form-group">
                        <label for="content">Blog Content:</label>
                        <textarea id="content" name="content" placeholder="Write your blog content here..." required="required"></textarea>
                    </div>
                    <div class="radio-group">
                        <label>Blog Type:</label>
                        <label><input type="radio" name="blog_type" value="Public" required="required" /> Public</label>
                        <label><input type="radio" name="blog_type" value="Private" required="required" /> Private</label>
                    </div>
                    <div class="checkbox-group">
                        <label>Tags:</label>
                        <label><input type="checkbox" name="tags[]" value="Informative" /> Informative</label>
                        <label><input type="checkbox" name="tags[]" value="Educational" /> Educational</label>
                        <label><input type="checkbox" name="tags[]" value="Opinion" /> Opinion</label>
                    </div>
                </fieldset>
                <div class="file-upload-container" id="fileUploadContainer">
                    <img src="images/upload-icon.png" alt="Upload Icon" />
                    <p><strong>Drag file(s) here to upload.</strong></p>
                    <p>Alternatively, you can select a file by <a href="#" onclick="document.getElementById('fileInput').click();">clicking here</a></p>
                    <input type="file" id="fileInput" name="image" style="display: none;" />
                    <p id="fileName" style="margin-top: 10px; color: #555;"></p>
                </div>

                <div class="form-group">
                    <button type="submit" class="submit-btn">Post</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
