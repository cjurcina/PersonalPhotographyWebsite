<?php
if (isset($_POST['send'])){

$to = 'cjurcina@yahoo.com';
$subject = 'Feedback from website';
//message building
$message ='Name: ' . $_POST['name'] . "\r\n\r\n";
$message .= 'Email: ' . $_POST['email'] . "\r\n\r\n";
$message .= 'Message: ' . $_POST['message'];

$success = mail($to, $subject, $message);
}