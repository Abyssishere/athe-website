<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    // Prepare email to be sent
    $to = "your_email@example.com"; // Replace with your email address
    $headers = "From: " . $email;
    $full_message = "Name: " . $name . "\nEmail: " . $email . "\nSubject: " . $subject . "\n\nMessage:\n" . $message;

    // Send email
    if (mail($to, $subject, $full_message, $headers)) {
        echo "Thank you for contacting us, " . $name . ". We will get back to you shortly.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again later.";
    }
} else {
    echo "Invalid request method.";
}
?>