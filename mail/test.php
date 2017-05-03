<?php


  ini_set('display_errors', 1); error_reporting(-1);

  print shell_exec( 'whoami' );

// Check for empty fields
// if(empty($_POST['name'])      ||
//    empty($_POST['email'])     ||
//    empty($_POST['phone'])     ||
//    empty($_POST['message'])   ||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//    {
//    echo "No arguments Provided!";
//    return false;
//    }

$name = 'testname'; //strip_tags(htmlspecialchars($_POST['name']));
$email_address = 'test@name.com'; //strip_tags(htmlspecialchars($_POST['email']));
$phone = '1111111'; // strip_tags(htmlspecialchars($_POST['phone']));
$message = 'test message'; // strip_tags(htmlspecialchars($_POST['message']));

// Create the email and send the message
$to = 'basicincomeberlin@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Circles Contact Form:  $name";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$headers = "From: noreply@mg.cafe-grundeinkommen.org\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;
?>
