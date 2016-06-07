<html>
<head>
<script type="text/javascript">
var counter=0;
window.setInterval('refreshdiv()',5000);

function refreshdiv()
{
	counter=counter+1;
	document.getElementById("reset");.innerHTML="Testing "+counter;
	
}
</script>
</head>
<body>
<div id="reset">
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
</div>

</body>
</html>