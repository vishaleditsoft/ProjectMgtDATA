<?php 

include("connection.php");
if(isset($_POST['add_mem'])){

$name=$_POST['user_name'];
$email=$_POST['email'];
$mobile=$_POST['mobile'];


$query="insert into members(mem_name,mem_email,mem_mobile) values('$name','$email','$mobile')";
$exe=mysqli_query($conn,$query);
header("Location:members.php");



}

?>