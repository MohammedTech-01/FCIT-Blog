<!DOCTYPE XHTML 1.0 Strict">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">


<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Post a Blog</title>
    <script type="text/javascript" src="../script/validation.js"></script> <!-- External JavaScript for form validation -->
    <script type="text/javascript" src="../script/file-upload.js"></script>
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
                        <input type="text" id="title" name="title" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="author">Author Name:</label>
                        <input type="text" id="author" name="author" required="required" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email Address:</label>
                        <input type="email" id="email" name="email" required="required" onblur="checkEmail();" />
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
                        <textarea id="content" name="content" required="required"></textarea>
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

                <div class="form-group">
                    <button type="submit" class="submit-btn">Post</button>
                </div>
            </form>
        </section>
    </main>
</body>
</html>
