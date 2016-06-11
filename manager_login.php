

<!DOCTYPE html>
<html>
    
<!-- Mirrored from moltran.coderthemes.com/green/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:49:14 GMT -->
<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
        <meta name="author" content="Coderthemes">

        <link rel="shortcut icon" href="assets/images/favicon_1.ico">

        <title>Moltran - Responsive Admin Dashboard Template</title>

        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
        <link href="assets/css/core.css" rel="stylesheet" type="text/css">
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
        <link href="assets/css/components.css" rel="stylesheet" type="text/css">
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css">
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css">
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css">

        <script src="assets/js/modernizr.min.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','../../www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-65046120-1', 'auto');
  ga('send', 'pageview');

</script>

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->

        
    </head>
    <body>

<?php
include_once('connection.php');
session_start();
$login_Err=$fnameErr = $emailErr = $lnameErr = $passErr = "";
$fname=$name=$lname= $email=$emailcheck=$pass="";


if(isset($_POST['login'])){

	$username=$_POST["manager_email"];
	$password=$_POST["manager_password"];

		
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
		if (empty($username)) {
				$emailErr = "Email is required";
				} else {
						$emailcheck = test_input($username);
						if (!filter_var($emailcheck, FILTER_VALIDATE_EMAIL)) {
						  $emailErr = "Invalid email format"; 
						  
						}
						else{
						$email=test_input($username);
						$user_email=$email;
						}
				}
				
				
				 if (empty($password)) {
					$passErr = "Enter Password";
					$pass="";
				  } else
				   {
						
							$pass=test_input($password);
							$password=$pass;
						
							}
				  }
				
			if($email=="" || $pass=="")
			{
				
			}
			else{



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
							echo '
								<div style="margin: 14.5%;text-align: center;width: 80%;">
									<div class="alert alert-success alert-dismissable ">
									                       Invalid authentication details..!!
								    </div>

									Go To   <a href="index.php"> Login </a>
								</div>

								';
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

	</body>

<!-- Mirrored from moltran.coderthemes.com/green/recoverpw.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 26 May 2016 13:49:14 GMT -->
</html>