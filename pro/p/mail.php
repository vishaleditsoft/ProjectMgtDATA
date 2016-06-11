<?php
// use wordwrap() if lines are longer than 70 characters
//$msg = wordwrap($msg,70);

//$txt = str_replace("\n.", "\n..", $txt);

$to="vishalguptahmh@gmail.com,vishalgupta0006@gmail.com";
$subject="meeeting";
$cmt=mysql_real_escape_string($_POST['comment']);
$headers = "From: webmaster@example.com" . "\r\n" ."CC: somebodyelse@example.com";
mail($to,$subject,$message,$headers);
echo "mail has been sent";
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>

</body>
</html>
