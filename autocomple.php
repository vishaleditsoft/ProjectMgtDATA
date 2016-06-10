<?php
include_once('connection.php');
$query="select mem_email from members";
$rest=mysqli_query($conn,$query);
$data=array();
while($result=mysqli_fetch_assoc($rest))
{
	$data[]=$result['mem_email'];
}
echo json_encode($data);
?>