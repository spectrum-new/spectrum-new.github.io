<?php 
$fname = $_POST['first_name'];
$lname = $_POST['last_name'];
$phone = $_POST['telephone'];
$email = $_POST['email'];
$message = $_POST['comments'];





$formcontent="From: $fname $lname \nEmail: $email \nPhone: $phone \nMessage: $message";
$recipient = "fady-t94@hotmail.com";
$subject = "Contact Form";
mail($recipient, $subject, $formcontent) or die("Error! Please try again!");
echo "Thank You! You will be redirected to the homepage in a second.";
?>
<meta http-equiv="refresh" content="3;url=http://www.luxurylashandbrowtique.com/" />