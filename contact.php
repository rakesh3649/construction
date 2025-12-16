<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and collect input
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = htmlspecialchars(trim($_POST["email"]));
    $phone = htmlspecialchars(trim($_POST["phone"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    // Basic validation
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // Email configuration
    $to = "rakeshmgs40@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission from $name";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $body = "You have received a new message:\n\n";
    $body .= "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you for contacting us, $name! We'll get back to you soon.";
    } else {
        echo "There was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>
