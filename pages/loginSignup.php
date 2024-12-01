<?php
$action = isset($_GET['action']) ? htmlspecialchars($_GET['action'], ENT_QUOTES, 'UTF-8') : '';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LogSign</title>
</head>

<body>
    <div class="container-login-signup">
        <?php if ($action === 'signup'): ?>
            <h1>Signup Successful!</h1>
            <p>Your account has been created successfully.</p>
            <button type="button" onclick="window.location.href='index.php?page=home';">Go to Home</button>
        <?php elseif ($action === 'login'): ?>
            <h1>Welcome Back!</h1>
            <p>You have successfully logged in.</p>
            <button type="button" onclick="window.location.href='index.php?page=home';">Go to Home</button>
        <?php else: ?>
            <h1>Invalid Action</h1>
            <p>Please try again.</p>
            <button type="button" onclick="window.location.href='index.php?page=home';">Go to Home</button>
        <?php endif; ?>
    </div>
</body>

</html>
