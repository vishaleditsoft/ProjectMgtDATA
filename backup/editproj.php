<?php
include('connection.php');
session_start();
$pid=$_POST['pid'];
$manger_id=$_SESSION['manager_id'];
$proj_name=$_POST['proj_name'];
$proj_assign=$_POST['assign_to'];
$proj_mem_id=$_POST['proj_member_id'];
$proj_desc=$_POST['proj_desc'];

$proj_dead=$_POST['proj_dead'];

$proj_doco=$_FILES['proj_doco']['name'];
$proj_temp=$_FILES['proj_doco']['temp_name'];
$proj_miles=$_POST['mile_stone'];

if(is_dir('upload/'.$manger_id))
	{
		$destt="upload/".$manger_id."/".$proj_doc;
		move_uploaded_file($proj_temp, $destt);
	}
else  {
	mkdir('upload/'.$manger_id);
		$destt="upload/".$manger_id."/".$proj_doc;
		move_uploaded_file($proj_temp, $destt);
		}	
/*
$addpro_query="insert into project(`project_name`,`project_manger_id`,`project_member_id`,`assign_to`,`project_desc`,`project_milestone`,`project_document`,`project_end_date`) values('$proj_name','$manger_id','$proj_mem_id','$proj_assign','$proj_desc','$proj_miles','$destt','$proj_dead')";
*/
$quer="update project set project_name='$proj_name', assign_to='$proj_assign',project_manger_id='$manger_id',project_desc='$proj_desc', project_end_date='$proj_dead',
project_milestone='$proj_miles',project_document='$destt' where project_id='$pid'";
$res=mysqli_query($conn,$quer);

header("Location:projects.php");

 ?>