<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if(isset($_POST['submit'])) {
  $to_email =  $receiving_email_address;

  $from_email = $_POST['email'];
  $from_name = $_POST['name'];
  $subject = $_POST['subject'];
  $message = $from_name . " wrote the following:" . "\n\n" . $_POST['message'];

  $headers = "From: $from_email \r\n";
	$headers .= "Reply-To: $from_email \r\n";
	$headers .= "Return-Path: $from_email\r\n";
	$headers .= "X-Mailer: PHP \r\n";

  mail($to_email, $subject, $message, $headers);
}
?>