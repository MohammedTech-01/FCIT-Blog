<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Posted</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #f4f4f4;
        }

        .message-container {
            text-align: center;
            background-color: #ffffff;
            padding: 20px 40px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        .message-container h1 {
            color: #4CAF50;
            margin-bottom: 20px;
        }

        .message-container a {
            display: inline-block;
            margin: 10px;
            padding: 10px 20px;
            text-decoration: none;
            color: #ffffff;
            background-color: #4CAF50;
            border-radius: 4px;
            transition: background-color 0.3s;
        }

        .message-container a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="message-container">
        <h1>Your blog post has been submitted successfully!</h1>
        <a class="home-btn" href="index.php?page=home">Back to Home</a>
    </div>
</body>
</html>
