<?php 
include('connection.php');
$name=$_POST['menname'];
$pro=$_POST['pronam'];
$namdata=array();
$ccount=substr_count($name,',');
while($ccount>0)
{
$namdata=(explode(',',$name,-$ccount));
$ccount--;
}
foreach($namdata as $nam)
{
//	echo ;
	$quert="UPDATE  `teams` SET  `mem_project` ='$pro'   WHERE  `mem_id` =$name";
	$quer="insert into teams(`team_member`,`team_project_id`) values('$nam','$pro')";
	$rs=mysqli_query($conn,$quert);
	echo "<br>";
} 


//$res=mysqli_query($conn,$quer);


?>