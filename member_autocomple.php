<?php
include_once('connection.php');
$query="select mem_name from members";
$rest=mysqli_query($conn,$query);
$data=array();
while($result=mysqli_fetch_assoc($rest))
{
	$data[]=$result['mem_name'];
}
echo json_encode($data);
?>