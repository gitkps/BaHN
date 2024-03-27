<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Message</title>
<script src="Scripts/AC_RunActiveContent.js" type="text/javascript"></script>
</head>

<body>

<p>
<?php
$to = "info@bahnautomation.com";
$cc = "vsp@bahnautomation.com";
$bc = "skn@bahnautomation.com";
$cc2 = "dreamzimage@yahoo.com";
$subject = "Bahn Webmail";
$email = $_REQUEST['email'] ; 
$name = $_REQUEST['name'] ;
$phone = $_REQUEST['phone'] ;
$message = $_REQUEST['message'] ; 
$address = $_REQUEST['address'] ;
$headers = "From: $email"; 
$body = "Hi,\n\n A contact form was submitted from the Bahn Automation website with the following details.\n\n Name:  $name\n Phone: $phone\n Address: $address\n Email: $email\n Message:$message" ;
$sent = mail($to, $subject, $body, $headers) ; 
if ($sent) {
	$sent = mail($cc, $subject, $body, $headers) ;
	$sent = mail($cc2, $subject, $body, $headers) ;
	$sent = mail($bc, $subject, $body, $headers) ;
	echo("<p>Thanks for your interest. You will hear from us shortly</p>");
} else {
  	echo("<p>Sorry Message delivery failed...</p>");
 }

?>
  <script type="text/javascript">
AC_FL_RunContent( 'codebase','http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=5,0,0,0','width','100','height','22','src','button5','quality','high','pluginspage','http://www.adobe.com/shockwave/download/download.cgi?P1_Prod_Version=ShockwaveFlash','movie','button5' ); //end AC code
</script><noscript></noscript>
</p>


<p>&nbsp;</p>

</body>
</html>
