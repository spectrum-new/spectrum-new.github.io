<?php
if(isset($_POST['email']) || isset($_POST['phone']) {
 
    // EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "fady-t94@hotmail.com";
    $email_subject = "Spectrum contact email";
 
    // validation expected data exists
    if(!isset($_POST['name']) ||
        //!isset($_POST['company']) ||
        !isset($_POST['email']) ||
        !isset($_POST['phone']) ||
        //!isset($_POST['location']) ||
        !isset($_POST['product']) ||
        !isset($_POST['message'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted. Please go back and try again.');       
    }

	
    $name = $_POST['name'];
    $company = $_POST['company'];
    $email = $_POST['email'];
    $phone = $_POST['phone']);
    $location = $_POST['location']);
    $product = $_POST['product']);
    $message = $_POST['message']);
 
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Company: ".clean_string($company)."\n";
    $email_message .= "Email: ".clean_string($email)."\n";
    $email_message .= "Phone: ".clean_string($phone)."\n";
	$email_message .= "Location: ".clean_string($location)."\n";
    $email_message .= "Product: ".clean_string($product)."\n";
	$email_message .= "Message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email."\r\n".
'Reply-To: '.$email."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- include your own success html here -->
 
Thank you for contacting us. We will be in touch with you very soon.
 
<?php
 
}
?>