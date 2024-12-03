<?php
session_start(); // Start the session to access session variables like $_SESSION['username']
// $base_url = "/CPCS403-Final";
?>
<!-- <header> -->
<div class="navbar">
  <!-- <nav> -->
  <h1><a href="index.php">FCIT BLOG</a></h1>
  <ul>
    <li><a href="index.php?page=home">Home</a></li>
    <li><a href="index.php?page=about">About</a></li>
    <li><a href="index.php?page=services">Services</a></li>
    <li><a href="index.php?page=events">Events</a></li>
    <li><a href="index.php?page=contact">Contact</a></li>
    <li><a href="index.php?page=blog">Blog</a></li>
    <li><a href="index.php?page=writeBlog">Post a Blog</a></li>
    <li><a href="index.php?page=gallery_images">Image Gallery</a></li>
  </ul>

  <!-- Search bar -->
  <div class="search-container">
    <form action="index.php?page=search" method="get">
        <div>
            <label for="search-input">Search for a destination:</label>
            <input type="text" name="query" id="search-input" />
        </div>
        <div>
            <!-- <button type="submit" id="search-btn">
                <img src="images/search-icon.png" alt="Search Icon" />
            </button> -->
        </div>
    </form>
</div>



  <!-- Auth Buttons -->
  <div class="auth-buttons">
    <?php if (isset($_SESSION['username'])): ?>
      <!-- If logged in, show username and logout button -->
      <span class="username"><?php echo htmlspecialchars($_SESSION['username'], ENT_QUOTES, 'UTF-8'); ?></span>
      <a href="<?php echo htmlspecialchars('admin/logout.php', ENT_QUOTES, 'UTF-8'); ?>">
        <button class="logout-btn">Log Out</button>
      </a>
    <?php else: ?>
      <!-- If not logged in, show login and signup buttons -->
      <a class="login-btn" href="index.php?page=login">Log In</a>
      <a class="signup-btn" href="index.php?page=signup">Sign Up</a>
    <?php endif; ?>
  </div>
  <!-- </nav> -->
</div>

<!-- </header> -->