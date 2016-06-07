<?php
include_once("connection.php");
$name=$_POST['manager_name'];
$email=$_POST['manager_email'];
$pass=$_POST['manager_password'];
$cpass=$_POST['manager_cpassword'];
$mob_no=$_POST['manager_phone_no'];
$company_name=$_POST['company_name'];

$res="insert into admin(`admin_name`,`admin_email_id`,`admin_password`,`admin_mobile_no`,`admin_company_name`) values('$name','$email','$pass','$mob_no','$company_name');";
$result=mysqli_query($conn,$res);
header('location:login.php');
//echo $conn;

//$conn=new mysqli('loacalhost','root','')








?>