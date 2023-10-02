<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('index');
    }

    public function about_Us(): string
    {
        return view('about_Us');
    }





    public function services(): string
    {
        return view('services');
    }

    public function pricing_plans(): string
    {
        return view('pricing_plans');
    }

    public function contact_us(): string
    {
        return view('contact_us');
    }


    public function submit_enquiry()
    {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];

        // Validate email
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            echo "Invalid email format.";
            exit;
        }
        if (!empty($_POST["email"])) {

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
    }

    public function contact_support()
    {

        // Get form data
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        if (!empty($_POST["email"])) {
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
    }
}
