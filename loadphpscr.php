<?php 
include_once('connection.php');
$quer="SELECT * FROM  `notification`";
$rest=mysqli_query($conn,$quer);
$aresult=array();
?> <table> <?php
while($result=mysqli_fetch_assoc($rest))
{
?><tr>
	<td><?php	echo	$result['Name'];
?>
	</td>
	<td><?php	echo  	$result['subject'];

	?></td>
		<td><?php	echo  	$result['type'];
	echo $result['subject'];
	?></td></tr><?php
}
//echo $aresult;
?>