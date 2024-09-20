<?php
// process_contact.php
include 'includes/config.php';
require 'vendor/autoload.php'; // Composer's autoloader for PHPMailer

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Sanitize and validate input
$name = trim($_POST['name'] ?? '');
$email = trim($_POST['email'] ?? '');
$subject = trim($_POST['subject'] ?? '');
$message = trim($_POST['message'] ?? '');

$errors = [];

// Basic validation
if (empty($name)) {
    $errors[] = "Name is required.";
}

if (empty($email)) {
    $errors[] = "Email is required.";
} elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors[] = "Invalid email format.";
}

if (empty($subject)) {
    $errors[] = "Subject is required.";
}

if (empty($message)) {
    $errors[] = "Message is required.";
}

if (!empty($errors)) {
    // You can handle errors by redirecting back with error messages or displaying them here
    // For simplicity, we'll display them directly
    echo "<h3>There were errors in your form:</h3><ul>";
    foreach ($errors as $error) {
        echo "<li>" . htmlspecialchars($error) . "</li>";
    }
    echo "</ul><a href='contact.php'>Go Back</a>";
    exit;
}

// Insert into database
$stmt = $conn->prepare("INSERT INTO contacts (name, email, subject, message) VALUES (?, ?, ?, ?)");
$stmt->bind_param("ssss", $name, $email, $subject, $message);

if ($stmt->execute()) {
    // Send email to admin
    $mail = new PHPMailer(true);

    try {
        // Server settings
        // $mail->SMTPDebug = SMTP::DEBUG_SERVER; // Enable verbose debug output
        $mail->isSMTP();
        $mail->Host       = 'smtp.example.com'; // Set the SMTP server to send through
        $mail->SMTPAuth   = true;
        $mail->Username   = 'your_email@example.com'; // SMTP username
        $mail->Password   = 'your_email_password'; // SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS; // Enable TLS encryption
        $mail->Port       = 587;

        // Recipients
        $mail->setFrom('your_email@example.com', 'NGO Website');
        $mail->addAddress('admin@example.com', 'Admin'); // Add admin email

        // Content
        $mail->isHTML(true);
        $mail->Subject = "New Contact Form Submission: " . $subject;
        $mail->Body    = "<h3>New Contact Form Submission</h3>
                          <p><strong>Name:</strong> " . htmlspecialchars($name) . "</p>
                          <p><strong>Email:</strong> " . htmlspecialchars($email) . "</p>
                          <p><strong>Subject:</strong> " . htmlspecialchars($subject) . "</p>
                          <p><strong>Message:</strong><br>" . nl2br(htmlspecialchars($message)) . "</p>";

        $mail->send();
        // Redirect to a thank you page or display success message
        echo "<h3>Thank you for contacting us. We will get back to you shortly.</h3><a href='index.php'>Return to Home</a>";
    } catch (Exception $e) {
        // Handle email sending error
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
} else {
    echo "There was an error saving your message. Please try again later.";
}

$stmt->close();
$conn->close();
?>
