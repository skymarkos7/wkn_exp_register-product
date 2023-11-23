<?php
session_start();


// Check if the user is already logged in, redirect if true
if (isset($_SESSION['user_id'])) {
    require_once 'routes/api.php';
    // header("Location: dashboard.php");
    exit;
}

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Include the login logic file
    require_once 'login.php';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

    <h2>Login</h2>

    <form method="POST" action="">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <br>

        <input type="submit" value="Login">
    </form>

</body>
</html>
