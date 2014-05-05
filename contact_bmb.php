<?
/*
Property of IOMATIX Inc.
You may not alter, replicate, or reuse the contents in this file.
May 11th, 2006
*/
function contact() {
    $output .= "<p><form method=\"post\" id=\"emailForm\" action=\"contact.html\">";
    $output .= "email address: <br /><input type=\"text\" name=\"email\" /><br />";
    $output .= "message:<br />";
    $output .= "<textarea name=\"message\" rows=\"15\" cols=\"40\">";
    $output .= "</textarea><br /><br />";
    $output .= "<input type=\"submit\" name=\"emailForm\" value=\"Send Email\" />";
    $output .= "</form></p>";
return $output;
}
function validateEmail($email) {
   return eregi("^[_\.0-9a-zA-ZæøåÆØÅ-]+@([0-9a-zA-ZæøåÆØÅ][0-9a-zA-ZæøåÆØÅ-]+\.)+[a-zA-Z]{2,6}$", $email);
}
function email_action($to, $subject="Information Request", $options="") {

if (validateEmail($from=$_POST['email'])) {
	if ($_POST['sign-up'] == "on") { 
		$_POST['sign-up'] = "yes";
	}
	else {
		$_POST['sign-up'] = "no";
	}
	if ($_POST['oldenough'] == "on") { 
		$_POST['oldenough'] = "yes";
	}
	else {
		$_POST['oldenough'] = "no";
	}
	$html="<h3>New Request from " . ucwords($from) . "</h3><hr />";
	$plain="New Request from " . ucwords($from) . "
-------------------------------------";
	foreach ($_POST as $key => $value) {
		if ($key<>"emailForm" && $value<>"") {
			$html.="<b>" . $key . "</b>: " . $value . "<br />";
			$plain.="
" . $key . ": " . $value;
		}
		if (!stristr($options, $key)) {
			error_log($options);
		}
		if ($value=="" && !stristr($options, $key)) {
			$message .= "<p class=\"red\"> " . ucwords($key) ." is a required field.</p>";
			$validate=array($key,$message);
		}
	}
	if ($message <> '') {
		return $message;
	}
	$html.="<hr />";
	$plain.="
-------------------------------------";
		
//heredoc syntax
$html_email = <<<EOD
$html
EOD;
$plain_email = <<<EOD
$plain
EOD;
//end heredoc
		
	require('Swift.php');
	require('Swift/Swift_Sendmail_Connection.php');
	$connection = new Swift_Sendmail_Connection('/usr/sbin/sendmail -bs');
	$mailer = new Swift($connection);
	$mailer->addPart($plain_email);
	$mailer->addPart($html_email, 'text/html');
	if (!$mailer->hasFailed()) {
		$mailer->send($to, $from, $subject);
		$mailer->close();
		$message = "<div data-alert class=\"alert-box success radius\"><h4>Thank You For Your Feedback</h4><p>Your questions/concerns are important to us. We will review your comments shortly.</p><a href=\"#\" class=\"close\">&times;</a></div>";
	}
	else {
		error_log("The mailer failed to connect. Errors: ".print_r($mailer->errors, 1).". Log: ".print_r($mailer->transactions, 1));
		$message = "<div data-alert class=\"alert-box error radius\"><h4>Request Failed</h4><p>Please try again later or use our other contact info such as our business email.</p><a href=\"#\" class=\"close\">&times;</a></div>";
	}
}
else {
	$message = "<div data-alert class=\"alert-box error radius\"><h4>Request Failed</h4><p>Please check that you entered a valid email address and try again.</p><a href=\"#\" class=\"close\">&times;</a></div>";
	$validate=array('email',$message);
	return $message;
}
return $message;
}
?>