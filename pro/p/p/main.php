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


<?php
$n=htmlspecialchars($_SESSION['MM_Username']);
require_once('../Connections/localhost.php');
mysql_select_db('pro',$localhost);
$query2="select * from p";
$result1=mysql_query($query2,$localhost)  or die(mysql_error());
while($row=mysql_fetch_array($result1))
{
	if($row['college_id']==$n)
		{
			$_SESSION['myname']=$row['name'];
		}

}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>

<link rel="stylesheet" type="text/css" href="pro.css">

</head>
<script src="jquery-1.11.3.min.js" type="text/javascript" ></script>
<script type="text/javascript">
function get()
{
	var sel=document.getElementById("select_post_links");
	var str=sel.options[sel.selectedIndex].text;
	
	var input =$('#cmt').val();
	
	if(input =="" || input == null)
	{
		alert("box should not be blank");
	}
	else{	
		$.post('add_cmt.php',{comment:input,topic:str},function(output){
		$('#an').slideDown('slow').prepend(output+'<br/><hr/>').hide().fadeIn('slow')});
	}	
}
</script>

<body bgcolor="#FFFFFF">
	<?php require_once("header.php"); ?>

		
	
	<form  name="frm" method="post" id="mainform" >
		 <p align="center" > 
			 <textarea name="cmt" cols="59" rows="6" id="cmt" height="60px" style="box-shadow: 10px 10px 5px grey;" width="150px" placeholder="share your views here(max 400 characters)" maxlength="400" required ></textarea>
			
			<br /><br />
			
			Your post related to:
				<select name="select_post_links" id="select_post_links">
				<option >Achivement</option>
				<option >Awareness</option>
				<option >fest</option>
				<option selected="selected" >Project</option>
				<option >Research</option>
				<option >Misc</option>			
				</select>
		
			
			<input type="button"  value="post" onclick="get()"/>        
			</p>
			
			<input type="hidden" value="<?php echo htmlspecialchars($_SESSION['MM_Username']); ?>" id="uname"  />
	</form>
	
	<table id="posted_data" width="536" align="center" border="1" >
		
			<tr>
				<td>
					<p ><div  id="an" ></div></p>
					<?php include("priview.php"); ?>
				</td>
		  </tr>
	  </table>
<div id="free_space"></div>
<table width="100%">
<tr>
	<td>
	<?php include("footer.php"); ?>
	</td>	
</tr>
</table>
</body>
</html>
