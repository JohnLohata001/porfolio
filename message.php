<?php 

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (!empty($email) && !empty($message)) {

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        
        $receiver = "lohatajean@gmail.com";
        $subject = "Form : $name <$email>";
        $body = "Name: $name\nEmail: $email\nsubject: $subject\n\nMessage: $message\nRegards, \n$name";
        $sender = "From: $email";
        if (mail($receiver, $subject, $body, $sender)) {
            echo "Your message has been sent";
        } else {
            echo "Sorry, failed to send your message ! ";
        }
        
    } else {
        echo "Enter a validate email address!";
    }
    
} else {
    echo "Fill all the fields please !..";
}

