<?php
include_once('connection.php');
session_start();
$user_email=$_POST['manager_email'];
$password=$_POST['manager_password'];
$query="select * from admin where `admin_email_id`='$user_email' and admin_password='$password' limit 1";
$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result) >0)
		{
			while($rdata=mysqli_fetch_assoc($result))
			{
				$adminid=$rdata['admin_id'];
				$manager_name=$rdata['admin_name'];
				$manager_email=$rdata['admin_email_id'];
				$status=$rdata['status'];

			}
			if($status==1)
			{
				header('location:dashboard.php');
				
				$_SESSION['manager_id']=$adminid;
				$_SESSION['manager_name']=$manager_name;
				$_SESSION['manger_email']=$manager_email;

			}
			else{
			echo"	<script> alert('you havent activated your account yet..!');</script>";

			}


			
			
		}
	else
		{
			echo "Invalid authentication detail";
			
		}



?>