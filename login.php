<?php
// Include any necessary database connection or user validation logic

// Dummy user data (replace this with your user validation logic)
$valid_username = "user";
$valid_password = "password";

// Check if the submitted username and password are valid
if (
    isset($_POST['username']) &&
    isset($_POST['password']) &&
    $_POST['username'] === $valid_username &&
    $_POST['password'] === $valid_password
) {
    // Set session variable to mark the user as logged in
    $_SESSION['user_id'] = 1; // You may want to use the actual user ID from your database

    // Redirect to the dashboard or any other page after successful login
    header("Location: index.php");
    exit;
} else {
    echo "Invalid username or password";
}
?>
