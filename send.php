<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $to = 'info@seawardunderwaterservices.com';
    $from = $_POST['email'];
    $subject = $_POST['subject'];
    
    $msg = "Name: {$_POST['name']} \n";
    $msg .= "Email: {$_POST['email']} \n";
    $msg .= "Phone No: {$_POST['phone_no']} \n";
    $msg .= "Subject: {$_POST['subject']} \n";
    $msg .= "Message: {$_POST['message']} \n";

    // Send mail
    mail($to, $subject, $msg);
}