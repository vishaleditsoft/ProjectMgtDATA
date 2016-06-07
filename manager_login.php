<?php
include_once('connection.php');
session_start();
$user_email=$_POST['manager_email'];
$password=$_POST['manager_password'];
$query="select `admin_id`,`admin_email_id`,`admin_name` from admin where `admin_email_id`='$user_email' and admin_password='$password' limit 1";
$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result) >0)
		{
			while($rdata=mysqli_fetch_assoc($result))
			{
				$adminid=$rdata['admin_id'];
				$manager_name=$rdata['admin_name'];
				$manager_email=$rdata['admin_email_id'];
				$_SESSION['manager_id']=$adminid;
				$_SESSION['manager_name']=$manager_name;
				$_SESSION['manger_email']=$manager_email;
			}
			header('location:dashboard.php');
			
		}
	else
		{
			echo "Invalid authentication detail";
			
		}



?>