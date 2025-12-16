<?php
// Dummy credentials (for demo)
$valid_email = "rakeshmgs40@gmail.com";
$valid_password = "123456";

// Get form data
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// Simple authentication
if ($email === $valid_email && $password === $valid_password) {
    // Redirect to main page
    header("Location: index.html"); // or "Location: main.html" based on your file
    exit();
} else {
    // Redirect back to login with error
    echo "<script>alert('Invalid credentials. Please try again.'); window.location.href='login.html';</script>";
    exit();
}
?>
