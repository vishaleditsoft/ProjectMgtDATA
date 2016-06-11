<?php
include_once('connection.php');
$dfiel=$_POST['msgid'];
$querd="delete from `messages` WHERE `message_id`=$dfiel";
$res=mysqli_query($conn,$querd);
?>