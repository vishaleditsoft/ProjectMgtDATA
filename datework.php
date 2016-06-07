<?php
include_once('connection.php');
$qury="select * from project";
$result=mysqli_query($conn,$qury);
$data=array();
$mdata=array();
echo "[";
$s="";
$rcot=mysqli_num_rows($result);
while($rest=mysqli_fetch_assoc($result))
{	
	
	$pname=$rest['project_name'];
	$a=$rest['project_end_date'];
	$ba=explode('/',$a);
	$dat=$ba[2]."-".$ba[1]."-".$ba[0];
	$mdata=array("title "=>$pname,"start "=>$dat,"className"=>"bg-purple");
	
	echo json_encode($mdata);
	
	if($rcot>1)
	{
		echo ",";
		$rcot--;
	}
	
	}
echo "]";
//echo count($mdata);	
	
?>