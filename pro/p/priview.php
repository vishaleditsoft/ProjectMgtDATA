<html><body>

<?php
	
	require_once('../Connections/localhost.php');
	mysql_select_db('pro',$localhost);
	$query="select * from comment order by id desc";
	$result=mysql_query($query,$localhost);
	$count=0;
	$temp="";
	//finding the last element
	while($row=mysql_fetch_array($result))
	{
		$temp=$row[0];
		$query2="select * from p where college_id='$temp' ";
		$result2=mysql_query($query2,$localhost);
		$row2=mysql_fetch_row($result2);
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
		echo "<font size='+2' style='font-style: bold; color:#3366FF;'>" .$row2[1] ."</font>:-<font size='-1' style='color:grey;'>(".$row[4].")</font><br>";
		echo "&nbsp;<font size='+1' style='font-style:bold; color:#33cc33;'>(".$row[1].")::</font>".$row[2]."<br>";
		echo '</td></tr></table>';
		echo "<br>";
	}
		
	/*
	
	//finding the last element
	while($row=mysql_fetch_array($result))
	{
		$count=$row['id'];
	}
	//count down from last element and then printing it.
	while($count>0)
		{
		$query1="select * from comment where id=$count ";
		$result1=mysql_query($query1,$localhost);
		$row1=mysql_fetch_row($result1);
		
		
		
		$temp=$row1[0];
		$query2="select * from p where college_id='$temp' ";
		$result2=mysql_query($query2,$localhost);
		$row2=mysql_fetch_row($result2);
		 
		echo $row2[1]."::<br>(".$row1[1].")::".$row1[2]."<br><hr>";
		
		$count--;
	}
	
	*/
?>

</body></html>


