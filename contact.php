<?php
if(isset($_POST['submit']){
	$email_to = "";
    $email_subject = "New message";
 
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $location = $_POST['location'];
    $product = $_POST['product'];
    $message = $_POST['message'];
 
	$email_message = "";
    $email_message .= "Name: ".$name;
    $email_message .= "\nCompany: ".$company;
    $email_message .= "\nEmail: ".$email;
    $email_message .= "\nPhone: ".$phone;
	$email_message .= "\nLocation: ".$location;
    $email_message .= "\nProduct: ".$product;
	$email_message .= "\nMessage: ".$message;
 
	mail($email_to, $email_subject, $email_message);  
?>
 
 <meta http-equiv="refresh" content="3; index.html" />
 
Thank you for contacting us. We will be in touch with you very soon. You will be redirected in a few seconds.
 
<?php
}
?>