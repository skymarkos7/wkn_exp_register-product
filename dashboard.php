<?php
session_start();

// Check if the user is not logged in, redirect if true
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

    <h2>Welcome to the Dashboard!</h2>

    <p>Logout <a href="logout.php">here</a></p>

</body>
</html>
