<html>
<head>
<script type = "text/javascript"  src = "http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
</script>
 <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
 </script>
   
	<?php
include('connection.php');
$del=$_POST['deldat'];

?>
<script>
$(document).ready(function(){
var conf=confirm("Are You sure you want to delete this");
if(conf==true)
{
	console.log('edw');
<?php 
$quer="delete from project where project_id=$del";
$querp=mysqli_query($conn,$quer);

 ?>
 alert("Project Deleted");
 <?php //header('location:projects.php');?>
}
else
{

}

});
</script>
   
   
   </head>
<body>

</body>
</html>