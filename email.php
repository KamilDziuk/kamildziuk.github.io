<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    $to = 'kontakt@kamildziuk.pl';
    $subject = 'New Contact Form Submission';
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-type: text/html\r\n";

    $messageBody = "Name: $name<br>";
    $messageBody .= "Email: $email<br>";
    $messageBody .= "Message: $message<br>";

    // Spróbuj wysłać e-mail
    if (mail($to, $subject, $messageBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Message could not be sent.";
    }
}
?>