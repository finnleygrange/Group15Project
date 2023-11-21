<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/mobile.css">
    <link rel="stylesheet" href="styles/desktop.css" media="screen and (min-width: 768px)">
    <script src="scripts/script.js" defer></script>
    <title>ModernFit Gym | Register</title>
</head>
<body>
    <div class="main-container">
        <h1 id="title">ModernFit Gym</h1>
        <form action="">
            <div>
                <h2>Create New Account</h2>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="text" name="email" id="email" placeholder="Email" required>
            </div>
            <div>
                <label for="name">Name</label>
                <input type="text" name="name" id="name" placeholder="Name" required>
            </div>
            <div>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div>
                <label for="password-confirm">Confirm Password</label>
                <input type="password" name="password-confirm" id="password-confirm" placeholder="Confirm Password" required>
            </div>
            <div>
                <input type="submit" value="Register" id="register">
            </div>
        </form>
        <div>
            <p>Already have an account? <a href="login.html">Login Here</a></p>
        </div>
    </div>
</body>
<?php include("includes/header.php") ?>;
</html>