<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<body>


	<table width="100%"  border="0" class="home_logout">
		  <tr>
			<td width="35%" align="right"><div ><a href="index.php"  style="font-family:'Snap ITC';text-shadow:#000000;text-decoration: none;">HOME</a>&nbsp;&nbsp;&nbsp;welcome&nbsp;<a href="profile.php" style="font-family:'Snap ITC';text-shadow:#000000;text-decoration: none;"> <?php echo htmlspecialchars($_SESSION['myname']); ?></a>&nbsp;&nbsp; <a href="logout.php" style="font-family:'Viner Hand ITC'; color:#FF0000;text-shadow:#000000;text-decoration: none;">LOGOUT</a></div></td>
		  </tr>
		</table>


</body>
</html>