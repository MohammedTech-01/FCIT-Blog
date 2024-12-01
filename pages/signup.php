<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Sign Up</title>
</head>
<body>
    <div class="container-signup">
        <!-- Left Side: Sign Up Form -->
        <div class="signup-form">
            <h1>Create Your Account</h1>
            <form action="admin/signup.php" method="post"> <!-- Form now submits to signup.php -->
                <label for="username">Username</label>
                <input
                    type="text"
                    id="username"
                    name="username"
                    placeholder="Choose a username"
                    required="required"
                />

                <label for="email">Email address</label>
                <input
                    type="email"
                    id="email"
                    name="email"
                    placeholder="name@mail.com"
                    required="required"
                />

                <label for="password">Password</label>
                <input
                    type="password"
                    id="password"
                    name="password"
                    placeholder="********"
                    required="required"
                />

                <label for="confirm-password">Confirm Password</label>
                <input
                    type="password"
                    id="confirm-password"
                    name="confirm-password"
                    placeholder="********"
                    required="required"
                />

                <button type="submit" class="signup-btn">Sign Up</button>
            </form>

            <!-- Back to Home Button -->
            <button
                type="button"
                class="home-btn"
                onclick="window.location.href='index.html';"
            >
                Back to Home
            </button>
        </div>

        <!-- Right Side: Image -->
        <div class="signup-image">
            <img src="images/signup.png" alt="Sign Up Image" />
        </div>
    </div>
</body>
</html>
