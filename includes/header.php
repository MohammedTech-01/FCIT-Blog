<?php
session_start();  // Start the session to access session variables like $_SESSION['username']
$base_url = "/CPCS403-Final";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FCIT Blog</title>
</head>
<div>
  <nav>
    <h1><a href="index.php">FCIT BLOG</a></h1>
    <ul>
      <li><a href="index.php?page=home">Home</a></li>
      <li><a href="index.php?page=about">About</a></li>
      <li><a href="index.php?page=services">Services</a></li>
      <li><a href="index.php?page=events">Events</a></li>
      <li><a href="index.php?page=contact">Contact</a></li>
      <li><a href="index.php?page=blog">Blog</a></li>
      <li><a href="index.php?page=writeBlog">Post a Blog</a></li>
      <li><a href="index.php?page=gallery_images">image gallery</a></li>
    </ul>

    <!-- Search bar -->
    <div class="search-container">
      <input type="text" placeholder="Search destination..." id="search-input">
      <button type="submit" id="search-btn">
        <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50">
          <path
            d="M 21 3 C 11.621094 3 4 10.621094 4 20 C 4 29.378906 11.621094 37 21 37 C 24.710938 37 28.140625 35.804688 30.9375 33.78125 L 44.09375 46.90625 L 46.90625 44.09375 L 33.90625 31.0625 C 36.460938 28.085938 38 24.222656 38 20 C 38 10.621094 30.378906 3 21 3 Z M 21 5 C 29.296875 5 36 11.703125 36 20 C 36 28.296875 29.296875 35 21 35 C 12.703125 35 6 28.296875 6 20 C 6 11.703125 12.703125 5 21 5 Z">
          </path>
        </svg>
      </button>
    </div>


    <!-- Auth Buttons -->
    <div class="auth-buttons">
      <?php if (isset($_SESSION['username'])): ?>
        <!-- If logged in, show username and logout button -->
        <span class="username"><?php echo $_SESSION['username']; ?></span>
        <a href="<?php echo $base_url; ?>/admin/logout.php"><button class="logout-btn">Log Out</button></a>
      <?php else: ?>
        <!-- If not logged in, show login and signup buttons -->
        <a href="index.php?page=login"><button class="login-btn">Log In</button></a>
        <a href="index.php?page=signup"><button class="signup-btn">Sign Up</button></a>
      <?php endif; ?>
    </div>
  </nav>
</div>