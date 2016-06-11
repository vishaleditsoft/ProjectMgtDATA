<?php require_once('../Connections/localhost.php'); ?>
<?php
function GetSQLValueString($theValue, $theType, $theDefinedValue = "", $theNotDefinedValue = "") 
{
  $theValue = (!get_magic_quotes_gpc()) ? addslashes($theValue) : $theValue;

  switch ($theType) {
    case "text":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;    
    case "long":
    case "int":
      $theValue = ($theValue != "") ? intval($theValue) : "NULL";
      break;
    case "double":
      $theValue = ($theValue != "") ? "'" . doubleval($theValue) . "'" : "NULL";
      break;
    case "date":
      $theValue = ($theValue != "") ? "'" . $theValue . "'" : "NULL";
      break;
    case "defined":
      $theValue = ($theValue != "") ? $theDefinedValue : $theNotDefinedValue;
      break;
  }
  return $theValue;
}

$editFormAction = $_SERVER['PHP_SELF'];
if (isset($_SERVER['QUERY_STRING'])) {
  $editFormAction .= "?" . htmlentities($_SERVER['QUERY_STRING']);
}

if ((isset($_POST["MM_insert"])) && ($_POST["MM_insert"] == "form1")) {
  $insertSQL = sprintf("INSERT INTO p (name, father, mother, college-id, branch, dob, email, pass, catagory, mob) VALUES (%s, %s, %s, %s, %s, %s, %s, %s, %s, %s)",
                       GetSQLValueString($_POST['name'], "text"),
                       GetSQLValueString($_POST['father'], "text"),
                       GetSQLValueString($_POST['Mother'], "text"),
                       GetSQLValueString($_POST['college-id'], "text"),
                       GetSQLValueString($_POST['branch'], "text"),
                       GetSQLValueString($_POST['dob'], "date"),
                       GetSQLValueString($_POST['email'], "text"),
                       GetSQLValueString($_POST['pass'], "text"),
                       GetSQLValueString($_POST['select'], "text"),
                       GetSQLValueString($_POST['mobile_no'], "text"));

  mysql_select_db($database_localhost, $localhost);
  $Result1 = mysql_query($insertSQL, $localhost) or die(mysql_error());

  $insertGoTo = "login_registered.php";
  if (isset($_SERVER['QUERY_STRING'])) {
    $insertGoTo .= (strpos($insertGoTo, '?')) ? "&" : "?";
    $insertGoTo .= $_SERVER['QUERY_STRING'];
  }
  header(sprintf("Location: %s", $insertGoTo));
}

mysql_select_db($database_localhost, $localhost);
$query_Recordset1 = "SELECT * FROM p";
$Recordset1 = mysql_query($query_Recordset1, $localhost) or die(mysql_error());
$row_Recordset1 = mysql_fetch_assoc($Recordset1);
$totalRows_Recordset1 = mysql_num_rows($Recordset1);
?>
<?php
 
$nameErr = $emailErr = $genderErr = $re_pass = "";
$name = $email = $gender = $comment = $website = "";

 
 if ($_SERVER["REQUEST_METHOD"] == "POST"){
   if (empty($_POST["name"])) {
     $nameErr = "Name is required";
   } else {
     $name = test_input($_POST["name"]);
     // check if name only contains letters and whitespace
     if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
       $nameErr = "Only letters and white space allowed"; 
     }
   }
 if (empty($_POST["email"])) {
     $emailErr = "Email is required";
   } else {
     $email = test_input($_POST["email"]);
     // check if e-mail address is well-formed
     if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
       $emailErr = "Invalid email format"; 
     }
   }
   
     if (empty($_POST["gender"])) {
     $genderErr = "Gender is required";
   } else {
     $gender = test_input($_POST["gender"]);
   }
   
	if($_POST["repass"]!=$_POST["pass"])
		{
		$re_pass="password doesnot match";
		}

}
function test_input($data) {
   $data = trim($data);
   $data = stripslashes($data);
   $data = htmlspecialchars($data);
   return $data;
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="reg_css.css" rel="stylesheet" type="text/css" />
<style>

body{

background:url(cool.jpg) no-repeat fixed 100%; 
}
#wrapper{
	padding:15px;
	font-size:15px;
	line-height:40px;
	font-weight:bold;
	font-family:"comic Sans MS";
	background-color:#009999;
	opacity:0.6;
	color:#000;
	margin:125px;
}

.error {color: #FF0000;}	


</style>

<!--   <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/>
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
-->
  <script>
  $(document).ready(function() {
  
    $("#datepicker").datepicker();
  });
  </script>

</head>

<body onunload="alert('page is loading please wait');">
<div id="wrapper">
<form action="<?php echo htmlspecialchars($editFormAction); ?>" method="POST" name="form1">
<table width="961" height="97" border="0";>
<?php 
date_default_timezone_set("Asia/Kolkata");

echo date("Y/m/d H:i:s");


 ?>
  <tr>
    <td width="787" height="60" ><div align="center"><font size="+3" >REGISTRATION FORM</font></div></td>
	<td width="164" align="center"><u><span id="login" style="color:#FF3300;font-family:Arial, Helvetica, sans-serif;font-size:18px;"><a href="login.php">login</a></span></u></td>
  </tr>
</table>

<table width="638" height="563" border="0" align="center" bordercolor="#6633FF">
  <tr>
    <td>NAME</td>
    <td >
      
      <input name="name" type="text"  size="40" align="middle" placeholder="Name" required />    
	  <span class="error">* <?php echo $nameErr;?></span>
	  </td>
  </tr>
 <tr>
    <td>FATHER'S NAME </td>
    <td >
        <input name="father" type="text"  size="40" placeholder="Father's name" />  
      <span class="error">* <?php  ?></span>
	  </td>
  </tr>
  <tr>
    <td>MOTHER'S NAME </td>
    <td><input name="Mother" type="text" size="40" placeholder="Mother's name" />
	<span class="error">* <?php ?></span>
	</td>
  
  </tr>
  <tr>
    <td>COLLEGE ID </td>
    <td><input name="college-id" type="text"  size="40"  placeholder="College-id"/>
	<span class="error">* <?php ?></span>
	</td>
  
  </tr>
  <tr>
    <td>BRANCH</td>
    <td>
      <input name="branch" type="text"  size="40" placeholder="Branch"/>
    <span class="error">* <?php ?></span>
	</td>
  </tr>
 
  <tr>
    <td>DATE OF BIRTH </td>
    <td>
	<input type="date" name="dob" size="40" placeholder="date of birth"/>
     </td>
  </tr>
  
  <tr>
    <td>E-MAIL ID    
	</td>
    <td>
      <input name="email" type="email" required  size="40" placeholder="E-mail address"/>  
	<span class="error">* <?php echo $emailErr;?></span>	  </td>
  </tr>
  
  <tr>
    <td>Gender</td>
	<td>
<input type="radio" name="gender" value="female">Female
<input type="radio" name="gender" value="male">Male
<span class="error">* <?php echo $genderErr;?></span>

	    </td>
  </tr>
  <tr>
    <td>PASSWORD</td>
    <td>
      <input name="pass" type="password" size="40" placeholder="password" />
    <span class="error">* <?php  ?></span>
	</td>
  </tr>
  
  <tr>
    <td>RE-ENTER PASSWORD </td>
    <td>
      <input  name="repass" type="password" size="40" placeholder="Re-enter password" />
    <?php echo $re_pass; ?>
	</td>
  </tr>
  <tr>
    <td>Category</td>
    <td>
     <div style="size:25px;">
      <select name="select" >
        <option>Student</option>
        <option>Management</option>
        <option>Faculty</option>
      </select>
      </div>
       </td>
  </tr>
  <tr>
    	<td>MOBILE NUMBER </td>
    	<td><input name="mobile_no" type="text" size="40" placeholder="Mobile number" maxlength="10"/>
		<span class="error">* <?php ?></span>
		</td>
  
  </tr>
</table>
<p>
<div align="center" size=6> 
  <input name="SUBMIT" type="submit" id="SUBMIT" value="SUBMIT" /></div>




<input type="hidden" name="MM_insert" value="form1">
</p>
 </form>
</div>

</body>
</html>
<?php
mysql_free_result($Recordset1);
?>