<?php

$nameErr = $emailErr = $message = "";
$name = $email = $message = "";
$accept = "";



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["message"])) {
        $message = "";
    } else {
        $message = test_input($_POST["message"]);
    }
} else {
    // Set your email address where you want to receive emails. 
    $to = 'info@techdeveinfo.com';

    $subject = 'MSM Came From TechDeveInfo Form Contact';
    $headers = "From: " . $name . " <" . $email . "> \r\n";

    // $send_email = mail($to, $subject, $message, $headers);

    // echo ($send_email) ? 'success' : 'error';
    // $accept = " Your mail success ...";
}


function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
    // Set your email address where you want to receive emails. 


    // header('Location:index.php?767013ce0ee0f6d7a07587912eba3104cfaabc15=contact');
