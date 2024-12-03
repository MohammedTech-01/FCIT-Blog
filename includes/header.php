<?php
session_start(); // Start the session to access session variables like $_SESSION['username']
$base_url = "/CPCS403-Final";
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
      <label for="search-input">Search for a destination:</label>
      <input type="text" name="query" id="search-input" required="required" />
      <button type="submit" id="search-btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="24" height="24">
          <path
            d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z" />
        </svg>
      </button>
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