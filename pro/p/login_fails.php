<?php require_once('../Connections/localhost.php'); ?>
<?php
// *** Validate request to login to this site.
if (!isset($_SESSION)) {
  session_start();
}

$loginFormAction = $_SERVER['PHP_SELF'];
if (isset($_GET['accesscheck'])) {
  $_SESSION['PrevUrl'] = $_GET['accesscheck'];
}

if (isset($_POST['login'])) {
  $loginUsername=$_POST['login'];
  $password=$_POST['password'];
  $MM_fldUserAuthorization = "";
  $MM_redirectLoginSuccess = "index.php";
  $MM_redirectLoginFailed = "login_fails.php";
  $MM_redirecttoReferrer = false;
  mysql_select_db($database_localhost, $localhost);
  
  $LoginRS__query=sprintf("SELECT college_id, pass FROM p WHERE college_id='%s' AND pass='%s'",
    get_magic_quotes_gpc() ? $loginUsername : addslashes($loginUsername), get_magic_quotes_gpc() ? $password : addslashes($password)); 
   
  $LoginRS = mysql_query($LoginRS__query, $localhost) or die(mysql_error());
  $loginFoundUser = mysql_num_rows($LoginRS);
  if ($loginFoundUser) {
     $loginStrGroup = "";
    
    //declare two session variables and assign them
    $_SESSION['MM_Username'] = $loginUsername;
    $_SESSION['MM_UserGroup'] = $loginStrGroup;	      

    if (isset($_SESSION['PrevUrl']) && false) {
      $MM_redirectLoginSuccess = $_SESSION['PrevUrl'];	
    }
    header("Location: " . $MM_redirectLoginSuccess );
  }
  else {
    header("Location: ". $MM_redirectLoginFailed );
  }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="login.css" />
</head>
<body>
<br /><br />
<form ACTION="<?php echo htmlspecialchars($loginFormAction); ?>" METHOD="POST">
<div id="wrapper">

		<div align="center">
			<img src="images/dit.jpg" alt="dit" width="128" height="128" />		</div>
<br />	
<br />
<p align="center" style="color:#FF0000;">login fails try it again</p>

  <table  align="center" class='center'>
<tr>
	<td>

	</td>
	
	<td>
	  <tr>
			  <td class="F">Username:</td>
			  <td class="b"><input type="text" name="login" value="" placeholder="Username or Email"></td>
	  </tr>
			
			<tr>
			  <td class="F">Password:</td>
			  <td><input type="password" name="password" value="" placeholder="Password"></td>
			</tr>
			
			<tr>
				<td>&nbsp;</td><td><input type="submit" value="Submit"></td>
			</tr>
			
			<tr>
				<td colspan=2>&nbsp;</td>
			</tr>
			
			<tr>
				<td colspan=10 class="F2">Forget Password <a href="https://www.google.com">here</a>!</td>
			</tr>
			
			<tr>
				<td colspan=2 class="F2">Click <a href="registration.php">here</a> to register.</td>
			</tr>
	</td>
</tr>

</table>
</div>
</form>
<?php include("footer.php"); ?>
</body>
</html>
