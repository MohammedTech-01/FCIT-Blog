<?php
$action = isset($_GET['action']) ? $_GET['action'] : '';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LogSign</title>
</head>
    <div class="container-login-signup">
        <?php if ($action === 'signup'): ?>
            <h1>Signup Successful!</h1>
            <p>Your account has been created successfully.</p>
            <button onclick="window.location.href='/CPCS403-Final/index.php'">Go to Home</button>
        <?php elseif ($action === 'login'): ?>
            <h1>Welcome Back!</h1>
            <p>You have successfully logged in.</p>
            <button onclick="window.location.href='/CPCS403-Final/index.php'">Go to Home</button>
        <?php else: ?>
            <h1>Invalid Action</h1>
            <p>Please try again.</p>
            <button onclick="window.location.href='/CPCS403-Final/index.php'">Go to Home</button>
        <?php endif; ?>
    </div>
</html>
