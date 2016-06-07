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

?>