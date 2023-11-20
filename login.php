<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/mobile.css">
    <link rel="stylesheet" href="styles/desktop.css" media="screen and (min-width: 768px)">
    <script src="scripts/script.js" defer></script>
    <title>ModernFit Gym | Login</title>
</head>
<body>
    <div class="main-container">
        <h1 id="title">ModernFit Gym</h1>
        <form action="">
            <div>
                <h2>Login to your account</h2>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
                <p class="forgot-password"><a href="forgot-password.html">Forgot password?</a></p>
            </div>
            <div>
                <input type="submit" value="Login" id="login">
            </div>
        </form>
        <div>
            <p>Don't have an account? <a href="register.html">Register here</a></p>
        </div>
    </div>
</body>
<?php include("includes/header.php") ?>
</html>