<?php
if (!isset($_SESSION)) {
  session_start();
}

require_once('../Connections/localhost.php');
mysql_select_db('pro',$localhost);
 
$cmt=mysql_real_escape_string($_POST['comment']);
$cid=htmlspecialchars($_SESSION['MM_Username']);
$topic=mysql_real_escape_string($_POST['topic']);
$time=
$query="insert into comment (college_id,topic,comment) values ('$cid','$topic','$cmt')";
mysql_query($query,$localhost);

echo '<table   width="50%" style=" 
		 			background-color:#FFFFFF; 
			        width:50%;
  					border-style: solid;
   					padding:5px;
					border-radius:2%;
					margin:0 auto;"
					border-collapse: collapse;
					border: 1px solid black;
					>
					<tr><td>'; 
echo "<font size='+2' style='font-style: bold; color:#3366FF;'>". htmlspecialchars($_SESSION['myname'])."</font>:-<font size='-1' style='color:grey;'>(".date("Y \- m\- d     H:i:s ").")</font><br>";
echo "&nbsp;<font size='+1' style='font-style:bold; color:#33cc33;'>(".$topic."</font>)::".$cmt;
echo '</td></tr></table>';
	
 
?>