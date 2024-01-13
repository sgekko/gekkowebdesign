<?php

// $msg="";
// if(isset($_POST['submit']))
// {

// 	$from_add = "me@gmail.com"; 

// 	$to_add = "info@gekkowebdesign.com";

// 	$subject = "Test 1 Subject";
// 	$message = "Test 1 Message";
	
// 	$headers = "From: $from_add \r\n";
// 	$headers .= "Reply-To: $from_add \r\n";
// 	$headers .= "Return-Path: $from_add\r\n";
// 	$headers .= "X-Mailer: PHP \r\n";
	
	
// 	if(mail($to_add,$subject,$message,$headers)) 
// 	{
// 		$msg = "Mail sent OK";
// 	} 
// 	else 
// 	{
//  	   $msg = "Error sending email!";
// 	}
// }
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd"> 
<html>
<head>
	<title>Test form to email</title>
</head>

<body>
<?php echo $msg ?>
<p>
<form action='mail-handler.php' method='post'>
	<input type="text" name="email" value="Test2@email.com">
	<input type='submit' name='submit' value='Submit'>
</form>
</p>


</body>
</html>