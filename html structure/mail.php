<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nEmail: $email\nSubject: $subject\nMessage: $message";

    if(mail($to, $subject, $body)){
        echo "Thank you for contacting us. We will get back to you soon.";
    } else{
        echo "There was an error while sending your message. Please try again.";
    }
}
?>
