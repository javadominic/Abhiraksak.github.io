<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $subject = htmlspecialchars(trim($_POST['subject']));
    $message = htmlspecialchars(trim($_POST['message']));

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Set recipient email address
    $to = "abhiraksaka@gmail.com"; 

    // Set email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";

    // Compose the email
    $fullMessage = "Name: $name\n";
    $fullMessage .= "Email: $email\n";
    $fullMessage .= "Subject: $subject\n";
    $fullMessage .= "Message: \n$message\n";

    // Send email
    if (mail($to, $subject, $fullMessage, $headers)) {
        echo "Thank you for contacting us! We will get back to you soon.";
    } else {
        echo "Sorry, there was an error sending your message. Please try again.";
    }
} else {
    echo "Invalid request method.";
}
?>
