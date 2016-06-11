<?php
if (!isset($_SESSION)) {
  session_start();
}
$MM_authorizedUsers = "";
$MM_donotCheckaccess = "true";

// *** Restrict Access To Page: Grant or deny access to this page
function isAuthorized($strUsers, $strGroups, $UserName, $UserGroup) { 
  // For security, start by assuming the visitor is NOT authorized. 
  $isValid = False; 

  // When a visitor has logged into this site, the Session variable MM_Username set equal to their username. 
  // Therefore, we know that a user is NOT logged in if that Session variable is blank. 
  if (!empty($UserName)) { 
    // Besides being logged in, you may restrict access to only certain users based on an ID established when they login. 
    // Parse the strings into arrays. 
    $arrUsers = Explode(",", $strUsers); 
    $arrGroups = Explode(",", $strGroups); 
    if (in_array($UserName, $arrUsers)) { 
      $isValid = true; 
    } 
    // Or, you may restrict access to only certain users based on their username. 
    if (in_array($UserGroup, $arrGroups)) { 
      $isValid = true; 
    } 
    if (($strUsers == "") && true) { 
      $isValid = true; 
    } 
  } 
  return $isValid; 
}

$MM_restrictGoTo = "login_fails.php";
if (!((isset($_SESSION['MM_Username'])) && (isAuthorized("",$MM_authorizedUsers, $_SESSION['MM_Username'], $_SESSION['MM_UserGroup'])))) {   
  $MM_qsChar = "?";
  $MM_referrer = $_SERVER['PHP_SELF'];
  if (strpos($MM_restrictGoTo, "?")) $MM_qsChar = "&";
  if (isset($QUERY_STRING) && strlen($QUERY_STRING) > 0) 
  $MM_referrer .= "?" . $QUERY_STRING;
  $MM_restrictGoTo = $MM_restrictGoTo. $MM_qsChar . "accesscheck=" . urlencode($MM_referrer);
  header("Location: ". $MM_restrictGoTo); 
  exit;
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link rel="stylesheet" type="text/css" href="pro.css">
<link rel="stylesheet" type="text/css" href="header.css">
</head>

<body>

		
		
		
		
		

<div id="wrapper">
<header id="top">
 <h1 style="margin:10px;" ><img src="images/dit.jpg"  align="left" alt="dit_img" width="121" height="89" />MY-DITU</h1><br />
    <nav id="mainnav">
      <ul>
        <li><a href="index.php" >Home</a></li>
        <li><a href="#">About</a></li>
		<li><a href="contact.php">Contact</a></li>
        <li><a href="profile.php" class="thispage">Hello &nbsp;&nbsp; <?php echo htmlspecialchars($_SESSION['myname']); ?></a></li>
        <li><a href="logout.php">logout</a></li>
      </ul>
    </nav>
  </header>
 
</div>
		
		
		
<div id="wrapper">		
		


<table align="center"  width="50%" border="0" style="margin-top:5em;">
  	<tr >
    	<td width="50%" align="center" height="50px"><font size="+2">Name:</font></td>
   	  <td width="50%" align="center" ><font size="+2"><?php echo htmlspecialchars($_SESSION['myname']); ?></font></td>
  	</tr>
  	<tr>
    	<td width="50%" align="center" height="50px"><font size="+2">College ID:</font></td>
    	<td width="50%" align="center"><font size="+2"><?php echo htmlspecialchars($_SESSION['MM_Username']); ?></font></td>
	</tr>
  	<tr>
		<td colspan="2" align="center" height="65px">
		<div style="font-size:28px; font-family:"Courier New", Courier, monospace;">Your comments are:</div>
		</td>
	</tr>
	<tr>
		<td colspan="2" style="background-color:#EEEEEE;padding:10px;">
						
				<?php
				
				
					require_once('../Connections/localhost.php');
					mysql_select_db('pro',$localhost);
					
					$person=htmlspecialchars($_SESSION['MM_Username']);
					$query="SELECT * FROM `comment` where college_id= '$person'  order by id desc ";
					$result=mysql_query($query,$localhost);
					
					$count=0;
					$temp="";
					
					//finding the last element
					while($row=mysql_fetch_array($result))
					{
						echo '<table   width="50%" style=" 
		 			background-color:#FFFFFF; 
			        width:100%;
  					border-style: solid;
   					padding:5px;
					border-radius:2%;
					margin:0 auto;"
					border-collapse: collapse;
					border: 1px solid black;
					>
					<tr><td>'; 
					echo ":-<font size='-1' style='color:grey;'>(".$row[4].")</font><br>";
					echo "<font size='+1' style='font-style:bold; color:#33cc33;'>(".$row[1].")::</font>&nbsp;&nbsp;".$row[2]."<br><a href='del_cmt.php?del=$row[3]' style='box-shadow: 5px 5px 2px grey; '>delete</a>";
						
						echo '</td></tr></table><br>';
						
					}
?>

		</td>
	</tr>
	
	
</table>
 </div>
<?php include("footer.php"); ?>
</body>
</html>
