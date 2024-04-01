<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Clean and validate input from the contact form
    $name = clean_input($_POST["name"]);
    $email = clean_input($_POST["email"]);
    $message = clean_input($_POST["message"]);

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        http_response_code(400);
        echo "Invalid email format";
        exit;
    }

    // Customize the email subject and recipient address here
    $to = "george.david1763@gmail.com";
    $subject = "New Contact Form Submission";

    // Compose the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message";

    // Use PHPMailer for email handling
    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->SMTPDebug = 0; // Set to 2 for debugging
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Use SSL or TLS if required
    $mail->Host = "smtp.gmail.com"; // Your SMTP server hostname
    $mail->Port = 587; // Your SMTP server port
    $mail->Username = "george.david1763@gmail.com";
    $mail->Password = "woqphhuzbecpavdy";

    try {
        $mail->setFrom($email, $name);
        $mail->addAddress($to);
        $mail->Subject = $subject;
        $mail->Body = $email_content;
        $mail->send();
        // Success response
        session_start();
        $_SESSION['success'] = "Your message has been sent successfully!";
        
        // Redirect back to Contact Us page with success message in URL
        header('Location: contact_form.php?success=true');
        exit;
    } catch (Exception $e) {
        http_response_code(500);
        echo "Oops! Something went wrong and we couldn't send your message. Please try again later.";
        exit;
    }
}

// Clean user input
function clean_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>