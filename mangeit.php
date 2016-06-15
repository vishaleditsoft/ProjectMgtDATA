<?php
include('connection.php');
if(isset($_POST['field_val']) && isset($_POST["pid"])){

 $task=$_POST['field_val'];
 $piid=$_POST["pid"];

 foreach($task as $b)
 {
	$query="insert into project_milestone(`pid`,`project_mile`) values($piid,'$b')";
	$res=mysqli_query($conn,$query);
 }
 header("location:milestone.php?milestone=$piid");

}

if(isset($_POST['status'])  && isset($_POST["pid"]) && isset($_POST["proj_mile_id"])){
	
	$status=$_POST['status'];
	$proj_mile_id=$_POST["proj_mile_id"];
	$pid=$_POST['pid'];
	 $q="update `project_milestone` set status='$status' where proj_mile_id='$proj_mile_id'";
	$exe=mysqli_query($conn,$q);


$status_count=0;
$total_rows=0;

$qurt="SELECT * FROM  `project_milestone` where pid='$pid'";
$qupro=mysqli_query($conn,$qurt);
while($res=mysqli_fetch_assoc($qupro))
{
    $total_rows++;
    $status=$res['status'];
    if($status=="completed"){
    $status_count++;
    }
}
if($total_rows==0){
    $total_rows++;
}
$status_count=(($status_count)* 100 )/($total_rows);
	echo $status_count;

}


?>