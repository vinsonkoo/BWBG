	<?php
	function spamcheck($field)
		{
		//filter_var() sanitizes the e-mail
		//address using FILTER_SANITIZE_EMAIL
		$field=filter_var($field, FILTER_SANITIZE_EMAIL);

		//filter_var() validates the e-mail
		//address using FILTER_VALIDATE_EMAIL
		if(filter_var($field, FILTER_VALIDATE_EMAIL))
		{
		return TRUE;
		}
		else
		{
		return FALSE;
		}
		}

		if (isset($_REQUEST['email']))
		{//if "email" is filled out, proceed

		//check if the email address is invalid
		$mailcheck = spamcheck($_REQUEST['email']);
		if ($mailcheck==FALSE)
		{
		echo 
			'
			<html>
			<head>
				<title>Please enter a valid email | Black Women for Black Girls</title>
				<link rel="icon" type="image/png" href="images/favicon.ico">
				<link rel="stylesheet" type="text/css" href="style.css">
				<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
				<script src="http://code.jquery.com/jquery-latest.min.js"></script>
				<script>
					setTimeout(function(){ 
						window.location = "http://www.blackwomenforblackgirls.org/main.php?page=getinvolved#joinus"; }, 
						2000);
				</script>
			</head>
			<body>
			<br><br><br><br><br>
			<h2><p class="invalid_email">Please enter a valid email address. Redirecting you back to previous page.</p>
			</h2>';
		
		}
		else
		{//send email
		$email = $_REQUEST['email'] ;
		$subject = "Membership Application" ;
		$name = $_REQUEST['name'] ;
		$message = "
Email: ".$email."
Full Name: ".$name."
How are you interested in contributing to the BWBG Giving Circle?"
.$_REQUEST['message'] ;
		mail("info@blackwomenforblackgirls.org", "$subject for $name",
		$message, "From: $email" );
		// $headers="From: $name" . "\r\n" .
		echo 
			'
			<html>
			<head>
				<title>Thank You | Black Women for Black Girls</title>
				<link rel="icon" type="image/png" href="images/favicon.ico">
				<link rel="stylesheet" type="text/css" href="style.css">
				<link href="http://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet" type="text/css">
				<script src="http://code.jquery.com/jquery-latest.min.js"></script>
				<script>
					setTimeout(function(){ 
						window.location = "http://www.blackwomenforblackgirls.org/main.php?page=getinvolved"; 
					}, 2000);
				</script>
			</head>
			<body>
			<br><br><br><br><br><h2>
			<p class="membership_confirmation1">Thank you for your interest in contributing to the BWBG Giving Circle!</p>
			</h2>
			<h4>
			<p class="membership_confirmation2">You will be directed back to the site in 3 seconds.</p>
			</h4>';
		}
		}
		else
		{//if "email" is not filled out, display the form
		// echo "<form method='post' action='mailform.php'>
		// Email: <input name='email' type='text'><br>
		// Subject: <input name='subject' type='text'><br>
		// Message:<br>
		// <textarea name='message' rows='15' cols='40'>
		// </textarea><br>
		// <input type='submit'>
		// </form>";
		}
		?>

	</body>
	</html>