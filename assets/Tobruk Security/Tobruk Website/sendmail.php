<?php
date_default_timezone_set('Australia/Brisbane');
$contactname	  = $_POST["name"];
$contactemail	  = $_POST["email"];
$contactmessage	= $_POST["message"];
$contactip 		  = $_SERVER['REMOTE_ADDR'];
$contactbrowser = $_SERVER['HTTP_USER_AGENT'];
$curdate	      = date('g:i:s A \o\n l jS \of F Y');
$contactto      = "Tobruk Security <dev@latent.ventures>";
$contactsubject = "Tobruk Security Website Enquiry";
$contactheaders = "From: ".$contactname." <".$contactemail.">\r\n" .
				  "Reply-To: ".$contactemail."\r\n" .
				   "MIME-Version: 1.0\r\n" .
				   "Content-type: text/html; charset=iso-8859-1\r\n" .
				   "X-Mailer: PHP/" . phpversion();

$contactbody = "<html>
	<head>
		<style>
			body { font-family: 'Century Gothic', Helvetica, sans-serif; font-size: 1.0em; }
			a, a:visited { color: #39B54A; text-decoration: none; }
			p { margin: 0 0 1.0em 0; }
			hr { border: none; border-bottom: 1px solid #CCC; }
			table, td, th { border-collapse: collapse; margin: 0; padding: 0; }
			tr { border: 2px solid #EEE; }
			td { padding: 2px 5px; }
			#logo { display: block; margin: 0 auto; }
			#wrapper { background: #EEE; display: block; width: 800px; overflow: hidden; margin: 20px auto; padding: 10px; border-radius: 5px; box-shadow: 0px 3px 10px rgba(0,0,0,0.5); }
			#greeting {  }
			#body {  }
			#signoff {  }
			#footer { font-size: 0.9em; }
			.label { display: block; text-align: right; color: #999; font-size: 0.8em; background: #DDD; border-radius: 10px 0 0 10px; padding: 2px 5px; }
			.details { background: #FFF; }
		</style>
	</head>
	<body>
		<div>
				<strong>Name:</strong> {$contactname}<br>
				<strong>Email:</strong> {$contactemail}<br>
				<strong>IP Address:</strong> {$contactip}<br>
				<strong>User Agent:</strong> {$contactbrowser}<br>
				<strong>Message:</strong><br>{$contactmessage}
		</div>
	</body>
</html>";				  

mail($contactto, $contactsubject, $contactbody, $contactheaders);

echo("Thank you ".$contactname." - your email has been sent. <button onclick='back()'>Back</button>");
?>