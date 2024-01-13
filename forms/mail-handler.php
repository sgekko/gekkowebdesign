<?php 

error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");

// if(isset($_POST['submit'])) {
//   $to =  "info@gekkowebdesign.com";

//   $from_email = $_POST['email'];
//   $from_name = $_POST['name'];
//   $subject = $_POST['subject'];
//   $message = $from_name . " wrote the following:" . "\n\n" . $_POST['message'];

//   $headers = "From: $from_email \r\n";
//   $headers .= "Reply-To: $from_email \r\n";
//   $headers .= "Return-Path: $from_email\r\n";
//   $headers .= "X-Mailer: PHP \r\n";
  

//   mail($to, $subject, $message, $headers);
// }

if(isset($_POST['submit']))
{

	$from_email = $_POST['email'];
	echo $from_email; 

	$to_email = "info@gekkowebdesign.com";

	$subject = "Test 2 Subject";
	$message = "Test 2 Message";
	
	$headers = "From: $from_email \r\n";
	$headers .= "Reply-To: $from_email \r\n";
	$headers .= "Return-Path: $from_email \r\n";
	$headers .= "X-Mailer: PHP \r\n";
	
	mail($to_email, $subject, $message, $headers);
}
?>