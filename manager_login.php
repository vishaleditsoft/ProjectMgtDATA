<?php
include_once('connection.php');
session_start();



if(isset($_POST['login'])){

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
				$manager_activation=$rdata['activation'];
				$status=$rdata['status'];

			}
			if($status==1)
			{
				header('location:projects.php');
				
				$_SESSION['manager_id']=$adminid;
				$_SESSION['manager_name']=$manager_name;
				$_SESSION['manger_email']=$manager_email;

			}
			else{
			echo"	<h3>You haven't Activated your account..! A mail is already send to your mail address..!!</h3>";
				echo "
					<form action='manager_login.php' method='post'>
						<input type='hidden' name='manager_email' value='$manager_email'>
						<input type='hidden' name='manager_name' value='$manager_name'>
						<input type='hidden' name='manager_activation' value='$manager_activation'>
						<input type='submit' value='Resend' name='resend'>

					</form>
				";

						}


			
			
		}
	else
		{
			echo "Invalid authentication detail";
			
		}

}

		


				
	

if(isset($_POST['resend'])){

	$manager_name=$_POST['manager_name'];
	$manager_email=$_POST['manager_email'];
	$manager_activation=$_POST['manager_activation'];
			$to=$manager_email;
				$subject="Email Activation link";
				$body=" 
	

				Click on this link to activate your account : 
	
				http://localhost:82/Project_management/activation.php?user=$manager_name&act=$manager_activation

				";
				mail($to ,$subject,$body,"From: rokcer@gmail.com");
				header("location:index.php");


}

?>