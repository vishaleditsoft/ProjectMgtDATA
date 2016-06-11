<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once('../Connections/localhost.php');
mysql_select_db('pro',$localhost);
 if(isset($_GET['del']))
 {
 	$id=$_GET['del'];
	$sql="DELETE FROM COMMENT WHERE id='$id'";
	$res=mysql_query($sql) or die("faliled ".mysql_error());
	echo "<meta http-equiv='refresh' content='0;url=profile.php'>";
 }
 
?>