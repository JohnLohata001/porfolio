<?php


echo "Well done";
$name = htmlentities($_POST['name']);
$email = htmlentities($_POST['email']);
$to = 'lohatajean@gmail.com';

if (empty($name) && empty($email)) {
    echo '<script>alert("Your message failed, resend again...");</script>';
} else {
    mail($to, $name, $email);
}