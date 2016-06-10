<?php
include("connection.php");
 if((isset($_GET['user'])) && (isset($_GET['act'])))
{
	 $user=$_GET['user'];
 	$activation=$_GET['act'];
	 $q="select * from admin where admin_name='$user' ";
	 $exe=mysqli_query($conn,$q);
	 $r=mysqli_fetch_assoc($exe);

	 

	if($r['activation']==$activation){

	 echo "Thankyou ".$r['admin_name']."Your Account is now active";
	$q2="update admin set status='1' where admin_name='".$r['admin_name']."'";
		 $exe=mysqli_query($conn,$q2);
		echo "<a href='index.php'>Login page</a>";
	 }
	}


if((isset($_GET['admin_email_id'])) && (isset($_GET['act'])))
{
$email=$_GET['admin_email_id'];
	echo "
<div class='wrapper-page'>
	<form action='activation.php' method='post'>
		<input type='password' name='pass' autofocus required/>
		<input type='hidden' name='admin_email_id' value='$email' >
		<input type='submit' name='setpass' value='set password'>
	</form>
</div>
	";
	
}

if(isset($_POST['setpass'])){
$pass=$_POST['pass'];
 $email=$_POST['admin_email_id'];
 	 $q="update  admin set admin_password='$pass'  where admin_email_id='$email' ";
	 $exe=mysqli_query($conn,$q);
	

echo '
				<div class="wrapper-page">
				<div class="alert alert-success alert-dismissable ">
				                        <b>Password </b> is successfully changed..!! 
				                    </div>
				</div>
				';


	echo "<a href='index.php'>Login page</a>";
	 



	 }




?>