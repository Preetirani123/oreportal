<?php $name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$phone = $_POST['phone'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message \n Phone: $phone";
$recipient = "rani.preeti3333@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>