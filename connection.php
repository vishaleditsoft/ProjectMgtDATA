<?php
$host="localhost";
$user="root";
$pass="";
$db="project_managemt";
$conn=mysqli_connect("localhost","root","",$db);
// or die(" database connection is not established:".mysqli_error());
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";


?>