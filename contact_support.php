<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Email configuration
    $to = "info@kharigo.com";
    $subject = "kharigo Tech | New Contact Form Submission";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    // HTML template for email content
    $emailContent = "
    <html>
    <body>
        <h2>New Contact Form Submission</h2>
        <p><strong>Name:</strong> $name</p>
        <p><strong>Email:</strong> $email</p>
        <p><strong>Message:</strong> $message</p>
    </body>
    </html>
    ";

    // Send the email
    $mailResult = mail($to, $subject, $emailContent, $headers);

    if ($mailResult) {
        echo "Your message has been sent successfully!";
    } else {
        echo "There was an error sending your message.";
    }
}
