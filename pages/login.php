<?php
if (isset($_GET['message']) && $_GET['message'] === 'login_required') {
  echo "<p style='color: red; text-align: center;'>You must log in to access this page.</p>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Login</title>
</head>

<body>
  <div class="container-login">
    <!-- Left Side: Login Form -->
    <div class="login-form">
      <h1>Hello, welcome!</h1>
      <form action="admin/login.php" method="post">
        <label for="email">Email address</label>
        <input type="email" id="email" name="email" placeholder="name@mail.com" required="required" />

        <label for="password">Password</label>
        <input type="password" id="password" name="password" placeholder="********" required="required" />

        <div class="remember-forgot">
          <label>
            <input type="checkbox" name="remember" /> Remember me
          </label>
          <a href="#">Forgot password?</a>
        </div>

        <button type="submit" class="login-btn">Login</button>
        <a href="../index.php?page=signup" class="signup-btn">Sign Up</a>
      </form>

      <!-- Back to Home Button -->
      <button type="button" class="home-btn" onclick="window.location.href='index.php?page=home';">
        Back to Home
      </button>
    </div>

    <!-- Right Side: Image -->
    <div class="login-image">
      <img src="images/login.png" alt="Background Image" />
    </div>
  </div>
</body>

</html>
