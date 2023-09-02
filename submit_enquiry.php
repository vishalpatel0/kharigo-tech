<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Email parameters
    $to = "info@kharigo.com";
    $subject = "Kharigo Tech | New Enquiry from $name";

    // HTML email template
    $headers = "From: $email" . "\r\n" .
        "Reply-To: $email" . "\r\n" .
        "Content-type: text/html; charset=UTF-8" . "\r\n";

    $email_message = "
    <html>
    <head>
        <title>New Enquiry</title>
    </head>
    <body>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong><br>$message</p>
    </body>
    </html>
    ";

    // Send email
    if (mail($to, $subject, $email_message, $headers)) {
        echo "Enquiry sent successfully.";
    } else {
        echo "Error sending the enquiry.";
    }
}
