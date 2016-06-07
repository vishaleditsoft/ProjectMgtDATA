<?php
include_once('connection.php');
session_start();
$sendem=$_POST['temail'];
$subj=$_POST['subject'];
$msg_cont=$_POST['emailcont'];
$from=$_SESSION['manger_email'];
$quer="insert into `messages`(`to`,`from`,`subject`,`content`) values('$sendem','$from','$subj','$msg_cont')";

$rest=mysqli_query($conn,$quer);
header('Location:inbox.php');



?>