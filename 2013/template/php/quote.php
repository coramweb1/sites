<?php
//TODO: [1] Check message for evil js content (xss attacks)
//	[2] Test email generation and correct bugs
require_once('functions.php');

if($_POST["name"] and $_POST["email"] and $_POST["message"] ){
	//get data and email
	$type = $_POST['type'];
	$name = $_POST['name'];
	$contact = $_POST['contact'] ? $_POST['contact'] : "Unknown number" ;
	$company = $_POST['company'] ? $_POST['company'] : "Unknown company." ;
	$email = $_POST['email'];
	$message = $_POST['message'];

	//email
	$subect = "Quotation from {$name}";

	$headers = "From: {$name} <" . strip_tags($email) . ">\r\n";
	$headers .= "Reply-To: ". strip_tags($email) . "\r\n";
	$headers .= "MIME-Version: 1.0\r\n";
	$headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
	$headers .= '<meta http-equiv="X-UA-Compatible" content="IE=edge" />';

	$body = "<html>
		<body>
			<table cellpadding=\"0\" cellspacing=\"0\" style=\"border-radius: 2px; border: 1px solid #000000; opacity: 1.5px; background: #c2c2c2; padding: 10px; font-family: arial; font-size: 11px; color: #ffffff;\">
				<tr>
					<td><p><b>Contact query from:</b> {$name}</p>
						<p><b>Service requested:</b>{$type}</p>
						<p><b>Contact:</b> {$contact}</p>
						<p><b>Email:</b> <a href=\"mailto:{$email}\">{$email}</a></p>
						<p><b>Company:</b> {$company}</p>
						<p><b>Message:</b> {$message}</p>
					</td>
				</tr>
				<tr>
					<td><img src=\"http://www.coramwebsolutions.co.za/template/images/cws_logo.png\" alt=\"Coram Web Solutions\" width=\"240\" height=\"56\" /></td>
				</tr>
			</table>
		</body>
		</html>";
		$error_message = "";
		connection($error_message);
		
		if(isset($_POST['copy']) && $_POST['copy'] == 'Yes')
		{
			$mail_recp = "info@coramwebsolutions.co.za, {$email}";
		}
		else
		{
			$mail_recp = "info@coramwebsolutions.co.za";
		}
		
		if(mysql_query("INSERT INTO quote(name, company, email, contact, message, created_date, active_yn) VALUES('".$name."', '".$company."', '".$email."', '".$contact."', '".$message."', now(), 1)"))
		{
			mail($mail_recp, $subect, $body, $headers);
		}
		else
		{
			die(mysql_error());
		}
}
?>