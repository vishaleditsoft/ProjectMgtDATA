<?php
include_once("connection.php");



//echo $conn;

//$conn=new mysqli('loacalhost','root','')



if(isset($_POST['submit'])){
$name        =$_POST['manager_name'];
$pass       =$_POST['manager_password'];
$email       =$_POST['manager_email'];
$mob_no      =$_POST['manager_phone_no'];
$company_name=$_POST['company_name'];
$activation=base64_encode($pass.$name);

	$res="insert into admin(admin_name,admin_email_id,admin_password,admin_mobile_no,admin_company_name,activation) values('$name','$email','$pass','$mob_no','$company_name','$activation');";
	$result=mysqli_query($conn,$res);
	echo "<h3><br><br>Thankyou for registration .. checkout your email to activate your account.</h3>";
	$to=$email;
	$subject="Email Activation link";
	$body=" 
	

	Click on this link to activate your account : 
	
	http://localhost:82/Project_management/activation.php?user=$name&act=$activation

	";
	mail($to ,$subject,$body,"From: rokcer@gmail.com");
}





?>